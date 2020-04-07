<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
    .information{
      margin-top: 30px;
      text-align: center;
      font-size: 18px;
    }

    table{
      width: 100%;
    }

    th{
      text-align: center;
    }

    .import{
      text-align: right;
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
          <label>Estado de flujo de efectivo del {{$initaldate}} al {{$finaldate}}</label>
          <label id="date"></label>
        </div>
        <table>
          <tr>
            <th>Rubro</th>
            <th>Importe</th>
          </tr>
          <tr>
            <td><strong>Actividades de operación</strong></td>
          </tr>
          @foreach($actopcred as $actopcred)
            <tr>
              <td>{{$actopcred->accountName}}</td>
              <td class="import">{{$actopcred->sumamount}}</td>
            </tr>
          @endforeach
          @foreach($actopdeb as $actopdeb)
            <tr>
              <td>{{$actopdeb->accountName}}</td>
              <td class="import">-{{$actopdeb->sumamount}}</td>
            </tr>
          @endforeach
          <tr>
            <td></td>
            <td class="import"><hr>{{$sumactopcred-$sumactopdeb}}</td>
          </tr>
          <tr>
            <td><strong>Actividades de inversión</strong></td>
          </tr>
          @foreach($actincred as $actincred)
            <tr>
              <td>{{$actincred->accountName}}</td>
              <td class="import">{{$actincred->sumamount}}</td>
            </tr>
          @endforeach
          @foreach($actindeb as $actindeb)
            <tr>
              <td>{{$actindeb->accountName}}</td>
              <td class="import">-{{$actindeb->sumamount}}</td>
            </tr>
          @endforeach
          <tr>
            <td></td>
            <td class="import"><hr>{{$sumactincred-$sumactindeb}}</td>
          </tr>
          <tr>
            <td><strong>Actividades de financiamiento</strong></td>
          </tr>
          @foreach($actficred as $actficred)
            <tr>
              <td >{{$actindeb->accountName}}</th>
              <td class="import">-{{$actindeb->sumamount}}</td>
            </tr>
          @endforeach
          @foreach($actfideb as $actfideb)
            <tr>
              <td >{{$actfideb->accountName}}</th>
              <td class="import">-{{$actfideb->sumamount}}</td>
            </tr>
          @endforeach
          <tr>
            <td scope="row" class="item"></td>
            <td class="cols import"><hr>{{$sumactficred-$sumactfideb}}</td>
          </tr>
        </table>
      </div>
    </div>
  </body>
</html>
