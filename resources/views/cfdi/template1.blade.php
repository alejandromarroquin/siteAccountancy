<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <style>
            /** Define the margins of your page **/
            @page {
                margin: 0cm 0cm;
            }
            header {
                position: fixed;
                top: 1em;
                left: 0cm;
                right: 0cm;
                height: 1cm;
                color: white;
                text-align: center;
                line-height: 1.5cm;
                text-align: left;
            }
            footer {
                position: fixed;
                bottom: 0cm;
                left: 0cm;
                right: 0cm;
                height: 1cm;
                color: white;
                text-align: center;
                line-height: 1.5cm;
            }
            hr {
              height: 1px;
              background: rgba(120, 113, 113);
            }
            label{
              display: block;
              line-height: 20px;
              font-size: 14px;
              color: black;
            }
            h3{
              color: #E32121;
              line-height: 15px;
            }
            h5{
              line-height: 15px;
            }
            main{
              padding-top: 22em;
              width: 90%;
              margin: auto;
            }
            table, td, th {
              border: 1px solid #ddd;
              text-align: left;
            }
            table {
              border-collapse: collapse;
              width: 100%;
            }
            th, td {
              padding: 15px;
            }
            th{
              font-size: 12px;
            }
            td{
              font-size: 11px;
            }
            .cod{
              width: 15%;
            }
            .cant{
              width: 10%;
            }
            .unit{
              width: 15%;
            }
            .descript{
              width: 30%;
            }
            .price{
              width: 15%;
            }
            .imp{
              width: 15%;
            }
            .logo{
              padding-top: 1em;
              margin-left: 5em;
              float: left;
            }
            .senderinf{
              float: left;
              padding-left: 4em;
            }
            .subheader{
              border: 1px solid #ddd;
              height: 130px;
              width: 90%;
              margin: auto;
            }
            .date{
              color: black;
              text-align: center;
              margin-left: 2em;
            }

            .address{
              line-height: 15px;
            }
            .group-address{
              margin-top: 3px;
            }
            .balances{
              float: right;
              margin-top: 1em;
              padding-right: 7em;
            }
            .amounts{
              line-height: 30px;
            }
            .total{
              font-size: 18px;
              font-weight: bold;
            }
            .commercial{
              margin-top: 3em;
              height: 180px;
              border: 1px solid black;
              text-align: center;
              font-family: Arial;
              font-size: 40px;
              color: gray;
            }
            .codeqr{
              float: left;
            }
            .stampsinf{
              float: left;
              margin-top: 1.5em;
              max-width:80%;
            }
            .titlestamp{
              font-size: 11px;
            }
            .stamp{
              font-size: 10px;
            }
            .customer{
              margin-left: 1em;
              margin-top: 1em;
              float: left;
              width: 50%;
            }
            .taxinf{
              margin-left: 1em;
              margin-top: 0.4em;
              float: left;
            }
            .inf{
              font-size: 11px;
              line-height: 15px;
            }
            .hidden{
              color:white;
            }
        </style>
    </head>
    <body>
        <!-- Define header and footer blocks before your content -->
        <header>
            <hr></hr>
            <div class="logo">
              <img src="storage/Company/DYC160316AT6/Brand/brandDYC160316AT6.png" width="180" height="130">
            </div>
            <div class="senderinf">
              <label>{{$businessname}}</label>
              <label>R.F.C. {{$rfc_emisor}}</label>
              <div class="group-address">
                <label class="address">{{$street}}</label>
                <label class="address">No.{{$numext}} {{$colony}}</label>
                <label class="address">{{$city}}, {{$state}}. {{$cp}}</label>
              </div>
              <label>Télefono</label>
              <label>Página web</label>
              <label>Correo electronico</label>
            </div>
            <div class="date">
              <h3>Factura</h3>
              <h3>{{$numcfdi}}</h3>
              <h5>Fecha y hora de Expedición:</h5>
            </div><br>
            <div class="subheader">
              <div class="customer">
                <label>CLIENTE</label>
                <div class="customerinf">
                  <label>Razón social del cliente</label>
                  <label>RFC {{$rfccust}}</label>
                </div>
              </div>
              <div class="taxinf">
                <label class="inf">Folio Fiscal: </label>
                <label class="inf">Certificado del CSD: </label>
                <label class="inf">Certificado del SAT: </label>
                <label class="inf">Fecha de Certificación: </label>
                <label class="inf">Régimen Fiscal: </label>
                <label class="inf">Método de Pago: </label><label id="methodpay"></label>
                <label class="inf">Uso de CFDI: </label>
                <label class="inf">Forma de Pago: </label><label id="awaypay"></label>
              </div>
            </div>
        </header>
        <main>
          <table>
            <tr>
              <th class="cod">Cve Prod Serv</th>
              <th class="cant">Cant.</th>
              <th class="unit">Unidad</th>
              <th class="descript">Descripción</th>
              <th class="price">Precio Unitario</th>
              <th class="imp">Importe</th>
            </tr>
            @for($cont;$cont<$cantproducts;$cont++)
              <tr>
                <td class="cod">{{$codeproduct[$cont]}}</td>
                <td class="cant">{{$quantity[$cont]}}</td>
                <td class="unit">{{$unit[$cont]}}</td>
                <td class="descript">{{$concept[$cont]}}</td>
                <td class="price">{{$unitprice[$cont]}}</td>
                <td class="imp">{{$import[$cont]}}</td>
              </tr>
            @endfor
          </table>
          <div class="balances">
            <label class="amounts">Subtotal: {{$request->subtotal}}</label>
            <label class="amounts">IVA: {{$request->iva}}</label>
            <label class="amounts total">Total: {{$request->total}}</label>
          </div>
          <div class="commercial">
            Espacio publicitario
          </div>
          <div class="stamps">
            <div class="codeqr">
              <div class="code">
                <img src="data:image/png;base64, {{ base64_encode(QrCode::format('png')->size(150)->generate($cadenaqr)) }} ">
              </div>
            </div>
            <div class="stampsinf">
              <label class="titlestamp">Sello Digital del CFDI</label>
              <label class="stamp">HLSlA6I49LasPn9jdcU3LMKuRhrAo0Ib6DEZNaq7jSS4aLhEQApVcWvf1+mFJErEu6Ez1U0yStgWWoq7kZYr7ijyyrBgEumHFGUxInd+++rH2oYbm5lAB7KE+lDIT2NXhOB9hiPRlgCNV<br>uQrNiPsYCOi4nrIGBZNXt5GzwAU1oIjtkgVb2M55p0KnUA+f5yEMEfwvBzHG/Km1OE+2GKgU2sQp6ym3TdRi28nCGxOT/gEfucrlgFayaCLdtxlqdNk3hAYaeV/PlDgTq1j3ieBoewRrpeO1h6BRFRVyNg<br>Jn6hNfTUzeQ9ykqbWFlJZXw9B97TgeVMHtlwamiNW/A4VvQ==</label>
              <label class="titlestamp">Sello Digital del SAT</label>
              <label class="stamp">20001000000300022762</label>
              <label class="titlestamp">Cadena original del complemento de certificación del SAT</label>
              <label class="stamp">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</label>
            </div>
          </div>
        </main>
        <footer>
            <hr></hr>
        </footer>
    </body>
</html>
