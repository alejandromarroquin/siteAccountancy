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
            table {
              border-collapse: collapse;
              width: 100%;
            }

            th, td {
              text-align: left;
              padding: 8px;
            }

            tr:nth-child(even){background-color: #f2f2f2}

            th {
              background-color: #5698E8;
              color: black;
              font-size: 12px;
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
            }
            .titlestamp{
              font-size: 11px;
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
              <label>Nombre de la empresa</label>
              <label>{{$ad}}</label>
              <div class="group-address">
                <label class="address">Street</label>
                <label class="address">No. Colony</label>
                <label class="address">City State</label>
              </div>
              <label>Télefono</label>
              <label>Página web</label>
              <label>Correo electronico</label>
            </div>
            <div class="date">
              <h3>Factura</h3>
              <h3>000383</h3>
              <h5>Fecha y hora de Expedición:</h5>
            </div><br>
            <div class="subheader">
              <div class="customer">
                <label>CLIENTE</label>
                <div class="customerinf">
                  <label>Razón social del cliente</label>
                  <label>RFC</label>
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
            <tr>
              <td class="cod">---</td>
              <td class="cant">---</td>
              <td class="unit">---</td>
              <td class="descript">---</td>
              <td class="price">---</td>
              <td class="imp">---</td>
            </tr>
            <tr>
              <td class="cod">---</td>
              <td class="cant">---</td>
              <td class="unit">---</td>
              <td class="descript">---</td>
              <td class="price">---</td>
              <td class="imp">---</td>
            </tr>
            <tr>
              <td class="cod">---</td>
              <td class="cant">---</td>
              <td class="unit">---</td>
              <td class="descript">---</td>
              <td class="price">---</td>
              <td class="imp">---</td>
            </tr>
            <tr>
              <td class="cod">---</td>
              <td class="cant">---</td>
              <td class="unit">---</td>
              <td class="descript">---</td>
              <td class="price">---</td>
              <td class="imp">---</td>
            </tr>
          </table>
          <div class="balances">
            <label class="amounts">Subtotal:</label>
            <label class="amounts">IVA:</label>
            <label class="amounts total">Total:</label>
          </div>
          <div class="commercial">
            Espacio publicitario
          </div>
          <div class="stamps">
            <div class="codeqr">
              <div class="code">
                <img src="data:image/png;base64, {{ base64_encode(QrCode::format('png')->size(150)->generate('Make me into an QrCode!')) }} ">
              </div>
            </div>
            <div class="stampsinf">
              <label class="titlestamp">Sello Digital del CFDI</label>
              <label></label>
              <label class="titlestamp">Sello Digital del SAT</label>
              <label></label>
              <label class="titlestamp">Cadena original del complemento de certificación del SAT</label>
              <label></label>
            </div>
          </div>
        </main>
        <footer>
            <hr></hr>
        </footer>
    </body>
</html>
