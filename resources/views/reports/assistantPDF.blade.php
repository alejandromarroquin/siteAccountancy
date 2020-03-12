<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
    table {
      border-collapse: collapse;
      width: 100%;
      margin-top: 2em;
    }

    table, td, th {
      border: 1px solid black;
    }

    .information{
      margin-top: 30px;
      text-align: center;
      font-size: 18px;
    }

    .reference{
      width: 12%;
    }

    .date{
      width: 12%;
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
          <label>Auxiliar {{$account}}</label>
          <label id="date"></label>
        </div>
        <table id="table">
          <tr>
            <th class="date">Fecha</th>
            <th class="reference">Referencia</th>
            <th>Detalle</th>
            <th>Débito</th>
            <th>Crédito</th>
          </tr>
          @foreach($flowsd as $flowsd)
            @if($flowsd->typeflow=="Ingreso")
              <tr><th class="date">{{$flowsd->date}}</th><th class="reference">Referencia</th><th>{{$flowsd->concept}}</th><th>{{$flowsd->amount}}</th><th></th></tr>
            @else
              @if($flowsd->typeflow=="Egreso")
                <tr><th class="date">{{$flowsd->date}}</th><th class="reference">Referencia</th><th>{{$flowsd->concept}}</th><th></th><th>{{$flowsd->amount}}</th></tr>
              @endif
            @endif
          @endforeach
          @foreach($flowsc as $flowsc)
            @if($flowsc->typeflow=="Ingreso")
              <tr><th class="date">{{$flowsc->date}}</th><th class="reference">Referencia</th><th>{{$flowsc->concept}}</th><th>{{$flowsc->amount}}</th><th></th></tr>
            @else
              <tr><th class="date">{{$flowsc->date}}</th><th class="reference">Referencia</th><th>{{$flowsc->concept}}</th><th></th><th>{{$flowsc->amount}}</th></tr>
            @endif
          @endforeach
          <tr><th class="date"></th><th class="reference"></th><th></th><th>Saldo</th><th>{{$saldo}}</th></tr>
        </table>
      </div>
    </div>
  </body>
</html>
