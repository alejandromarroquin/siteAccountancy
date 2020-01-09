<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Providers\FacturacionModerna;
use App\cfdi;
use App\taxinformation;
use App\customers;
use App\unitmeasurements;
use App\methodpayment;
use App\waytopay;
use DB;
use PDF;
use Mail;
use QrCode;

class CfdiController extends Controller
{

    public function __construct()
    {

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $senderdata=taxinformation::join('taxregimes','taxinformations.idtaxRegime','=','taxregimes.id')->join('companies','taxinformations.id','=','companies.id')->join('contactlocations','taxinformations.id','=','contactlocations.id')->join('addresses','contactlocations.idAddress','=','addresses.id')->select('taxinformations.rfc','taxinformations.businessname','taxregimes.code','addresses.street','addresses.numExt','addresses.colony','addresses.city','addresses.state','addresses.postalCode')->where('companies.id',session('idcompany'))->get();
        $customers=customers::join('taxinformations','customers.idTaxInformation','=','taxinformations.id')->select('taxinformations.businessname')->get();
        $methodspayment=methodpayment::all();
        $wayspayment=waytopay::all();
        $units=unitmeasurements::all();
        if (Storage::disk('local')->exists('/Company/'.session('rfc').'/Brand/','brand'.session('rfc').'.png')){
          $url = Storage::disk('local')->url('Company/'.session('rfc').'/Brand/'.'brand'.session('rfc').'.png');
        }else{
          $url=null;
        }
        return view('cfdi.create',compact('units','senderdata','customers','methodspayment','wayspayment','url'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getCustomer(Request $request)
    {
        $customer=customers::join('taxinformations','customers.idTaxInformation','=','taxinformations.id')->select('taxinformations.rfc')->where('taxinformations.businessname',$request->elegido)->get();
        foreach($customer as $data){
          $customer=$data->rfc;
        }
        return $customer;
    }

    public function printCFDI(){
      $ad="texto";
      $pdf = \PDF::loadView('cfdi/newcfdi',compact('ad'));
      return $pdf->download('newcfdi.pdf');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      date_default_timezone_set('America/Mexico_City');
      /**
      * Niveles de debug:
      * 0 - No almacenar
      * 1 - Almacenar mensajes SOAP en archivo log.
      */

      $debug = 1;

      // RFC utilizado para el ambiente de pruebas
      $rfc_emisor = "TCM970625MB1";

      /**
       * Archivos del CSD de prueba proporcionados por el SAT.
       * Ver http://developers.facturacionmoderna.com/webroot/CertificadosDemo-FacturacionModerna.zip
       */
      $numero_certificado = "20001000000300022762";
      $archivo_cer = "../app/Utilities/Certificates/20001000000300022762.cer";
      $archivo_pem = "../app/Utilities/Certificates/20001000000300022762.key.pem";


      // Datos de acceso al ambiente de pruebas
      $url_timbrado = "https://t1demo.facturacionmoderna.com/timbrado/wsdl";
      $user_id = "UsuarioPruebasWS";
      $user_password = "b9ec2afa3361a59af4b4d102d3f704eabdf097d4";

      // generar y sellar un XML con los CSD de pruebas
      $cfdi = $this->generarXML($rfc_emisor,$request->condicspay,$request->subtotal,$request->currency,$request->total,$request->methodpayment,$request->cp,$request->businessname,$request->taxregime,$request->rfccust);
      $cfdi = $this->sellarXML($cfdi, $numero_certificado, $archivo_cer, $archivo_pem);

      // die(var_dump($cfdi));

      $parametros = array('emisorRFC' => $rfc_emisor,'UserID' => $user_id,'UserPass' => $user_password);

      $opciones = array();

      /**
      * Establecer el valor a true, si desea que el Web services genere el CBB en
      * formato PNG correspondiente.
      * Nota: Utilizar está opción deshabilita 'generarPDF'
      */
      $opciones['generarCBB'] = false;

      /**
      * Establecer el valor a true, si desea que el Web services genere la
      * representación impresa del XML en formato PDF.
      * Nota: Utilizar está opción deshabilita 'generarCBB'
      */
      $opciones['generarPDF'] = false;

      /**
      * Establecer el valor a true, si desea que el servicio genere un archivo de
      * texto simple con los datos del Nodo: TimbreFiscalDigital
      */
      $opciones['generarTXT'] = false;


      $cliente = new FacturacionModerna($url_timbrado, $parametros, $debug);

      if($cliente->timbrar($cfdi, $opciones)){
          // Almacenanos en la raíz del proyecto los archivos generados.
          $comprobante = getcwd().'/storage/Company/'.session('rfc').'/CFDIS/'.$cliente->UUID;

          if($cliente->xml){
            file_put_contents($comprobante.".xml", $cliente->xml);
            return 1;
          }else{
            return 0;
          }
          // if(isset($cliente->pdf)){
          //     echo "PDF almacenado correctamente en $comprobante.pdf\n";
          //     file_put_contents($comprobante.".pdf", $cliente->pdf);
          // }
          // if(isset($cliente->png)){
          //     echo "CBB en formato PNG almacenado correctamente en $comprobante.png\n";
          //     file_put_contents($comprobante.".png", $cliente->png);
          // }
      }else{
        echo "[".$cliente->ultimoCodigoError."] - ".$cliente->ultimoError."\n";
      }
    }

    /**
     * Sellar el comprobante
     * @param  string $cfdi               XML a sellar
     * @param  string $numero_certificado Numero del certificado
     * @param  string $archivo_cer        Ruta del archivo .cer
     * @param  string $archivo_pem        Ruta del archivo .pem
     * @return string                     XML sellado
     */
    function sellarXML($cfdi, $numero_certificado, $archivo_cer, $archivo_pem) {
        $private = openssl_pkey_get_private(file_get_contents($archivo_pem));
        $certificado = str_replace(array('\n', '\r'), '', base64_encode(file_get_contents($archivo_cer)));

        $xdoc = new \DomDocument();
        $xdoc->loadXML($cfdi) or die("XML invalido");

        $c = $xdoc->getElementsByTagNameNS('http://www.sat.gob.mx/cfd/3', 'Comprobante')->item(0);
        $c->setAttribute('Certificado', $certificado);
        $c->setAttribute('NoCertificado', $numero_certificado);

        $XSL = new \DOMDocument();
        $XSL->load('../app/Utilities/xslt33/cadenaoriginal_3_3.xslt');

        $proc = new \XSLTProcessor;
        $proc->importStyleSheet($XSL);

        $cadena_original = $proc->transformToXML($xdoc);
        openssl_sign($cadena_original, $sig, $private, OPENSSL_ALGO_SHA256);
        $sello = base64_encode($sig);

        $c->setAttribute('Sello', $sello);

        return $xdoc->saveXML();
    }


    /**
     * Generar el xml basico para el trimbrado
     * @param  string $rfc_emisor RFC del emisor
     * @return string XML valido
     */
    function generarXML ($rfc_emisor,$condicspay,$subtotal,$currency,$total,$methodpayment,$cp,$businessname,$taxregime,$rfccust) {
        $fecha_actual = substr( date('c'), 0, 19);

        $cfdi = <<<XML
        <?xml version="1.0" encoding="UTF-8"?>
        <cfdi:Comprobante xmlns:cfdi="http://www.sat.gob.mx/cfd/3" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sat.gob.mx/cfd/3 http://www.sat.gob.mx/sitio_internet/cfd/3/cfdv33.xsd" Version="3.3" Serie="A" Folio="01" Fecha="$fecha_actual" Sello="TqVg+/JpnhP5rLODxlLB3ptRT3QgArW4taQCK5H3QZcGnSm570QFq3Vpe7vBpxcq6Nr25no9sdvwzekU7pgawmUwCL5KWcZCWkCEKCx0UUBuxMRwSgKhR1iTDR/Jy+nosxoWhRA/NZxtTKvoePKKkT5waMN5Qy2YM5TtXSFnNXM=" FormaPago="03" NoCertificado="20001000000200000192" Certificado="MIIERjCCAy6gAwIBAgIUMjAwMDEwMDAwMDAyMDAwMDAxOTIwDQYJKoZIhvcNAQEFBQAwggFcMRowGAYDVQQDDBFBLkMuIDIgZGUgcHJ1ZWJhczEvMC0GA1UECgwmU2VydmljaW8gZGUgQWRtaW5pc3RyYWNpw7NuIFRyaWJ1dGFyaWExODA2BgNVBAsML0FkbWluaXN0cmFjacOzbiBkZSBTZWd1cmlkYWQgZGUgbGEgSW5mb3JtYWNpw7NuMSkwJwYJKoZIhvcNAQkBFhphc2lzbmV0QHBydWViYXMuc2F0LmdvYi5teDEmMCQGA1UECQwdQXYuIEhpZGFsZ28gNzcsIENvbC4gR3VlcnJlcm8xDjAMBgNVBBEMBTA2MzAwMQswCQYDVQQGEwJNWDEZMBcGA1UECAwQRGlzdHJpdG8gRmVkZXJhbDESMBAGA1UEBwwJQ295b2Fjw6FuMTQwMgYJKoZIhvcNAQkCDCVSZXNwb25zYWJsZTogQXJhY2VsaSBHYW5kYXJhIEJhdXRpc3RhMB4XDTEyMTAyMjIwNDgwNloXDTE2MTAyMjIwNDgwNlowgcAxITAfBgNVBAMTGEVESVRPUklBTCBTSVNUQSBTQSBERSBDVjEhMB8GA1UEKRMYRURJVE9SSUFMIFNJU1RBIFNBIERFIENWMSEwHwYDVQQKExhFRElUT1JJQUwgU0lTVEEgU0EgREUgQ1YxJTAjBgNVBC0THEVTSTkyMDQyNzg4NiAvIEhFR1Q3NjEwMDM0UzIxHjAcBgNVBAUTFSAvIEhFR1Q3NjEwMDNNREZSTk4wOTEOMAwGA1UECxMFQW1pZ2EwgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAK6YqAg3LHOPpAKD9OFkcNgB5wj+3k4oHPK3bFfku4TCEswtMhIt5LnZCt4UK0cp9SYpKMa2kZVYm6k6zphWg9bzv3pvHwt9mB6kFGyApU71cOk16unqL2o/pDj65zNtUBfDyKkKBUGQMYgtqvVq6aXJipqKOS/NsDKEUt0q1ghTAgMBAAGjHTAbMAwGA1UdEwEB/wQCMAAwCwYDVR0PBAQDAgbAMA0GCSqGSIb3DQEBBQUAA4IBAQCgCCpYDbmN8npLX6vHCEJAF/1G3KhuAGY48wVt1va1YXRy6yj+tJZ9HZ3l8TY7J6n10XkrbzedOArKyjdpfqWbNabZHw6b2IlSN8HrHliiAEor5hwTUJnkg6S1nm0mmirInxCmWoVV+qrEX/XHylJ+OjIql/GyZrH9sEPCY+LYFfVhO0U73jKqajMEeZtWYq5wro4UhPUhlYgwhlzUN6XNWtiC8ohjE6QJaf8jYRsJjHraZL257O1o5T/3ULMJhASN7R211FmyAuiYsq8H3buPE0kl+EmN8DUNpTDkB9Xf1ba6gXZ0PRXF1oGUwxvX9FiI5eIau2RLfy9AfJPcpAXN" CondicionesDePago='$condicspay' SubTotal="1850" Descuento="175.00" Moneda="$currency" Total="1943.00" TipoDeComprobante="I" MetodoPago="$methodpayment" LugarExpedicion="$cp">
          <cfdi:Emisor Rfc="$rfc_emisor" Nombre="FACTURACION MODERNA SA DE CV" RegimenFiscal="$taxregime"/>
          <cfdi:Receptor Rfc="$rfccust" Nombre="PUBLICO EN GENERAL" UsoCFDI="G01"/>
          <cfdi:Conceptos>
            <cfdi:Concepto ClaveProdServ="01010101" NoIdentificacion="AULOG001" Cantidad="5" ClaveUnidad="H87" Unidad="Pieza" Descripcion="Aurriculares USB Logitech" ValorUnitario="350.00" Importe="1750.00" Descuento="175.00">
              <cfdi:Impuestos>
                <cfdi:Traslados>
                  <cfdi:Traslado Base="1575.00" Impuesto="002" TipoFactor="Tasa" TasaOCuota="0.160000" Importe="252.00"/>
                </cfdi:Traslados>
              </cfdi:Impuestos>
            </cfdi:Concepto>
            <cfdi:Concepto ClaveProdServ="43201800" NoIdentificacion="USB" Cantidad="1" ClaveUnidad="H87" Unidad="Pieza" Descripcion="Memoria USB 32gb marca Kingston" ValorUnitario="100.00" Importe="100.00">
              <cfdi:Impuestos>
                <cfdi:Traslados>
                  <cfdi:Traslado Base="100.00" Impuesto="002" TipoFactor="Tasa" TasaOCuota="0.160000" Importe="16.00"/>
                </cfdi:Traslados>
              </cfdi:Impuestos>
            </cfdi:Concepto>
          </cfdi:Conceptos>
          <cfdi:Impuestos TotalImpuestosTrasladados="268.00">
            <cfdi:Traslados>
              <cfdi:Traslado Impuesto="002" TipoFactor="Tasa" TasaOCuota="0.160000" Importe="268.00"/>
            </cfdi:Traslados>
          </cfdi:Impuestos>
        </cfdi:Comprobante>
        XML;
        return $cfdi;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cfdi  $cfdi
     * @return \Illuminate\Http\Response
     */
    public function show(cfdi $cfdi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cfdi  $cfdi
     * @return \Illuminate\Http\Response
     */
    public function edit(cfdi $cfdi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cfdi  $cfdi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cfdi $cfdi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cfdi  $cfdi
     * @return \Illuminate\Http\Response
     */
    public function destroy(cfdi $cfdi)
    {
        //
    }
}
