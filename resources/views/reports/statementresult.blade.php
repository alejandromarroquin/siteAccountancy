@extends('layouts.app')

@section('styles')
  <link href="{{asset('css/statementresult.css')}}" rel="stylesheet">
@endsection

@section('content')

    <div class="card-body">
      <div class="row">
        <div class="col">
          <h1 class="page-header">Estado de resultados</h1>
        </div>
        <form action="/downloadstatementresult" method="GET">
          <div class="col">
            <input type="text" name="datetoday" hidden>
            <input type="text" name="initaldate" value="{{$initaldate}}" hidden>
            <input type="text" name="finaldate" value="{{$finaldate}}" hidden>
            <button type="submit" class="btn btn-primary" id="download">Descargar</button>
          </div>
        </form>
      </div>
      <div class="row margin">
        <div class="col-lg-8 col-xl-12">
          <div class="container information">
            @foreach($company as $information)
              <label>{{$information->businessName}}</label><br/>
            @endforeach
            <label>Estado de resultados del {{$initaldate}} al {{$finaldate}} </label>
          </div>
          <table class="table">
            <thead>
              <tr>
                <th scope="col" rowspan="2" class="title">Rubro</th>
                <th scope="col" rowspan="2" class="title">Importe</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row" class="rows">Ventas</th>
              </tr>
              @foreach($accountnames as $accountname)
                @if(array_key_exists($accountname->accountName,$arraysales))
                  <tr>
                    <td scope="row" class="item">{{$accountname->accountName}}</td>
                    <td class="cols import">{{$sale=$arraysales[$accountname->accountName]}}</td>
                    <label hidden>{{$totalsales=$totalsales+$sale}}</label>
                  </tr>
                @endif
              @endforeach
              <tr>
                <td scope="row" class="item"><strong>Total de ventas:</strong></td>
                <td class="cols import"><hr>{{$totalsales}}</td>
              </tr>
              <tr>
                <th scope="row" class="rows">Costo de ventas</th>
              </tr>
              <tr>
                @foreach($accountnames as $accountname)
                  @if(array_key_exists($accountname->accountName,$arraycosts))
                    <tr>
                      <td scope="row" class="item">{{$accountname->accountName}}</td>
                      <td class="cols import">{{$cost=$arraycosts[$accountname->accountName]}}</td>
                      <label hidden>{{$totalcosts=$totalcosts+$cost}}</label>
                    </tr>
                  @endif
                @endforeach
              </tr>
              <tr>
                <td scope="row" class="item"><strong>Total de costos:</strong></td>
                <td class="cols import"><hr>{{$totalcosts}}</td>
              </tr>
              <tr>
                <th scope="row" class="rows">Utilidad bruta</th>
                <th class="cols import">{{$grossprofit=$totalsales-$totalcosts}}</th>
              </tr>
              <tr>
                <th scope="row" class="rows">Gastos</th>
              </tr>
              <tr>
                @foreach($accountnames as $accountname)
                  @if(array_key_exists($accountname->accountName,$arrayexpenses))
                    <tr>
                      <td scope="row" class="item">{{$accountname->accountName}}</td>
                      <td class="cols import">{{$arrayexpenses[$accountname->accountName]}}</td>
                      <label hidden>{{$totalexpenses=$totalexpenses+$arrayexpenses[$accountname->accountName]}}</label>
                    </tr>
                  @endif
                @endforeach
              </tr>
              <tr>
                <td scope="row" class="item"><strong>Total de gastos:</strong></td>
                <td class="cols import"><hr>{{$totalexpenses}}</td>
              </tr>
              <tr>
                <th scope="row" class="rows">Utilidad antes de impuestos</th>
                <th class="cols import">{{$utilitybeforetaxes=$grossprofit-$totalexpenses}}</th>
              </tr>
              <tr>
                <th scope="row" class="rows">Impuestos a la utilidad</th>
                <th class="cols import">{{$incometaxes=$utilitybeforetaxes*.32}}</th>
              </tr>
              <tr>
                <th scope="row" class="rows">Utilidad neta</th>
                <th class="cols import">{{$netprofit=$utilitybeforetaxes-$incometaxes}}</th>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

@endsection

@section('jquery')
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
@endsection

@section('scripts')
  <script src="{{ asset('js/statementresult.js') }}"></script>
@endsection
