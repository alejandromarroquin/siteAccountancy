<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">

    .col-lg-8{
      width: 100%;
      min-height: 400px;
      border:black 1px solid;
      border-radius: 10px 10px 10px 10px;
    }

    .margin{
      margin-left: auto;
      margin-right: auto;
      width: 100%;
    }

    .information{
      margin-top: 30px;
      text-align: center;
      font-size: 18px;
    }

    .title{
      text-align: center;
    }

    .item{
      text-align: left;
    }

    .import{
      text-align: right;
      padding-right: 2em;
    }
    table {
      border-collapse: collapse;
    }


    table, td, th {
      width: 100%;
      border-collapse: separate;
      border-spacing: 10px 5px;
    }

    .thead{
      text-align: center;
    }

    .theadimport{
      padding-right: 2em;
      text-align: right;
    }

    .count{
      padding-left: 2em;
    }

  </style>
  </head>
  <body>
    <div class="row margin">
      <div class="col-lg-8 col-xl-12">
        <div class="container information">
          @foreach($company as $information)
            <label>{{$information->businessName}}</label><br/>
          @endforeach
          <label>Estado de resultados del {{$initaldate}} al {{$finaldate}}</label>
          <label id="date"></label>
        </div>
        <table>
        <tr>
          <th class="thead">Rubro</th>
          <th class="theadimport">Importe</th>
        </tr>
        <tr>
          <td colspan="2"><strong>Ventas</strong></td>
        </tr>
        @foreach($accountnames as $accountname)
          @if(array_key_exists($accountname->accountName,$arraysales))
            <tr>
              <td class="count">{{$accountname->accountName}}</td>
              <td class="import">{{$sale=$arraysales[$accountname->accountName]}}</td>

            </tr>
          @endif
        @endforeach
        <tr>
          <td class="count"><strong>Total de ventas</strong></td>
          <td class="import"><hr><strong>{{$totalsales}}</strong></td>
        </tr>
        <tr>
          <td colspan="2"><strong>Costo de ventas</strong></td>
        </tr>
        @foreach($accountnames as $accountname)
          @if(array_key_exists($accountname->accountName,$arraycosts))
            <tr>
              <td class="count">{{$accountname->accountName}}</td>
              <td class="import">{{$cost=$arraycosts[$accountname->accountName]}}</td>

            </tr>
          @endif
        @endforeach
        <tr>
          <td class="count"><strong>Total de costos</strong></td>
          <td class="import"><hr><strong>{{$totalcosts}}</strong></td>
        </tr>
        <tr>
          <td colspan=""><strong>Utilidad bruta</strong></td>
          <td class="import"><strong>{{$grossprofit}}</strong></td>
        </tr>
        <tr>
          <td colspan="2"><strong>Gastos</strong></td>
        </tr>
        @foreach($accountnames as $accountname)
          @if(array_key_exists($accountname->accountName,$arrayexpenses))
            <tr>
              <td class="count">{{$accountname->accountName}}</td>
              <td class="import">{{$arrayexpenses[$accountname->accountName]}}</td>

            </tr>
          @endif
        @endforeach
        <tr>
          <td class="count"><strong>Total de gastos</strong></td>
          <td class="import"><strong><hr>{{$totalexpenses}}</strong></td>
        </tr>
        <tr>
          <td class=""><strong></strong></td>
          <td class="import"><strong></strong></td>
        </tr>
        <tr>
          <td class=""><strong>Total antes de impuestos</strong></td>
          <td class="import"><strong>{{$utilitybeforetaxes}}</strong></td>
        </tr>
        <tr>
          <td class=""><strong>Impuestos a la utilidad</strong></td>
          <td class="import"><strong>{{$incometaxes}}</strong></td>
        </tr>
        <tr>
          <td class=""><strong>Utilidad neta</strong></td>
          <td class="import"><strong>{{$netprofit}}</strong></td>
        </tr>
        </table>
      </div>
    </div>
  </body>
</html>
