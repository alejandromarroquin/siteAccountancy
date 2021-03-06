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
                top: 0cm;
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
            main{
              padding-top: 15em;
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
              padding-left: 2em;
              float: left;
            }
            .senderinf{
              float: left;
              padding-left: 4em;
            }
            .customerinf{
              padding-left: 1em;
            }
            .customer{
              margin-top: 1em;
            }
            .date{
              color: black;
              text-align: right;
              padding-right: 3em;
            }
            .address{
              line-height: 15px;
            }
            .group-address{
              margin-top: 3px;
            }
            .vl{
              border-left: 2px solid gray;
              height: 120px;
              float: left;
              padding-top: 2em;
              margin-left: 6em;
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
              height: 250px;
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
        </style>
    </head>
    <body>
        <!-- Define header and footer blocks before your content -->
        <header>
            <hr></hr>
            <div class="date">
              <label>Fecha 09/01/2020 No.0001</label>
            </div>
            <div class="logo">
              <img src="storage/Company/DYC160316AT6/Brand/brandDYC160316AT6.png" width="180" height="130">
            </div>
            <div class="senderinf">
              <label>{{$businessname}}</label>
              <label>RFC {{$rfc_emisor}}</label>
              <div class="group-address">
                <label class="address">{{$street}}</label>
                <label class="address">No.{{$numext}} {{$colony}}</label>
                <label class="address">{{$city}}, {{$state}}. {{$cp}}</label>
              </div>
              <label>Télefono</label>
              <label>Página web</label>
              <label>Correo electronico</label>
            </div>
            <div class="vl"></div>
            <div class="customerinf">
              <label>CLIENTE</label>
              <div class="customer">
                <label>Nombre de la empresa</label>
                <label>RFC {{$rfccust}}</label>
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
