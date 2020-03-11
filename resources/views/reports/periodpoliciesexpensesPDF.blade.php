<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      table {
        border-collapse: collapse;
        width: 100%;
      }

      table, td, th {
        border: 1px solid black;
      }

      .information{
        margin-top: 30px;
        text-align: center;
        font-size: 18px;
      }

      .hidden{
        color:white;
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
          <label>Póliza de Egresos</label>
          <label id="date"></label>
        </div>
        <table>
          <tr>
            <th>Cuenta</th>
            <th>Subcuenta</th>
            <th>Nombre</th>
            <th>Parcial</th>
            <th>Debe</th>
            <th>Haber</th>
          </tr>
          @foreach($policiesdeb as $policie)
            @if(array_key_exists($policie->namesubaccount,$policiesperioddeb) && $policie->namesubaccount!=$subaccountname)
              <label class="hidden" hidden>{{$subaccountname=$policie->namesubaccount}}</label>
              <tr>
                <td>{{$policie->code}}</td>
                <td></td>
                <td>{{$policie->accountName}}</td>
                <td></td>
                <td></td>
                <td>{{$arraysumdebs[$policie->accountName]}}</td>
              </tr>
            @endif
            <tr>
              <td></td>
              <td>{{$policie->idsubaccount}}</td>
              <td>{{$policie->namesubaccount}}</td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          @endforeach
          <tr>
            <td>.</td>
            <td>.</td>
            <td>.</td>
            <td>.</td>
            <td>.</td>
            <td>.</td>
          </tr>
          @foreach($policiescred as $policie)
            @if(array_key_exists($policie->namesubaccount,$policiesperiodcred) && $policie->namesubaccount!=$accountname)
            <label class="hidden" hidden>{{$accountname=$policie->namesubaccount}}</label>
              <tr>
                <td>{{$policie->code}}</td>
                <td></td>
                <td>{{$policie->accountName}}</td>
                <td></td>
                <td>{{$arraysumcreds[$policie->accountName]}}</td>
                <td></td>
              </tr>
            @endif
            <label class="hidden" hidden>{{$sum=$sum+$policie->amount}}</label>
              <tr>
                <td></td>
                <td>{{$policie->idsubaccount}}</td>
                <td>{{$policie->namesubaccount}}</td>
                <td>{{$policie->amount}}</td>
                <td></td>
                <td></td>
              </tr>
          @endforeach
          <tr>
            <td>' </td>
            <td>' </td>
            <td>' </td>
            <td>' </td>
            <td>' </td>
            <td>' </td>
          </tr>
          <tr>
            <td>' </td>
            <td>' </td>
            <td>' </td>
            <td>' </td>
            <td>' </td>
            <td>' </td>
          </tr>
          <tr>
            <td>' </td>
            <td>' </td>
            <td>' </td>
            <td>Sumas iguales</td>
            <td>' </td>
            <td>' </td>
          </tr>
          <tr>
            <td colspan="6">Concepto</td>
          </tr>
          <tr>
            <td colspan="6">.</td>
          </tr>
          <tr>
            <td rowspan="2">Control</td>
            <td>Hecho por</td>
            <td>Revisado por</td>
            <td>Autorizado</td>
            <td>Auxiliares</td>
            <td>Diario</td>
          </tr>
          <tr>
            <td>.</td>
            <td>.</td>
            <td>.</td>
            <td>.</td>
            <td>.</td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>Fecha</td>
            <td>Póliza No.</td>
          </tr>
        </table>
      </div>
    </div>
  </body>
</html>
