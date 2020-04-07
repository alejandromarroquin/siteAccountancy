@extends('layouts.app')

@section('styles')
  <link href="{{asset('css/statementresult.css')}}" rel="stylesheet">
@endsection

@section('content')
<div id="page-wrapper" class="p-4">
  <div class="row mt-4" style="margin-left:20rem;">
    <div class="card-body">
      <div class="row">
        <div class="col-lg-12 col-xl-12">
          <div class="row">
            <div class="col">
              <h1 class="page-header">Estado de flujo de efectivo:</h1>
            </div>
            <form action="/downloadcashflow" method="GET">
              <input type="text" name="initaldate" value="{{$initaldate}}" hidden>
              <input type="text" name="finaldate" value="{{$finaldate}}" hidden>
              <div class="col">
                <button type="submit" class="btn btn-primary" id="download">Descargar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="row margin">
        <div class="col-lg-8 col-xl-12">
          <div class="container information">
            @foreach($company as $information)
              <label>{{$information->businessName}}</label><br/>
            @endforeach
            <label>Estado de resultados del {{$initaldate}} al {{$finaldate}}</label>
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
                <th scope="row" class="rows">Actividades de operación</th>
              </tr>
              @foreach($actopcred as $actopcred)
                <label hidden>{{$sumactopcred=$sumactopcred+$actopcred->sumamount}}</label>
                <tr>
                  <td scope="row" class="rows">{{$actopcred->accountName}}</td>
                  <td class="cols import">{{$actopcred->sumamount}}</td>
                </tr>
              @endforeach
              @foreach($actopdeb as $actopdeb)
                <label hidden>{{$sumactopdeb=$sumactopdeb+$actopdeb->sumamount}}</label>
                <tr>
                  <td scope="row" class="rows">{{$actopdeb->accountName}}</td>
                  <td class="cols import">-{{$actopdeb->sumamount}}</td>
                </tr>
              @endforeach
              <tr>
                <td scope="row" class="rows"></td>
                <td class="cols import"><hr>{{$sumactopcred-$sumactopdeb}}</td>
              </tr>
              <tr>
                <th scope="row" class="rows">Actividades de inversión</th>
                <td class="cols"></td>
              </tr>
              @foreach($actincred as $actincred)
                <label hidden>{{$sumactincred=$sumactincred+$actincred->sumamount}}</label>
                <tr>
                  <td scope="row" class="rows">{{$actincred->accountName}}</td>
                  <td class="cols import">{{$actincred->sumamount}}</td>
                </tr>
              @endforeach
              @foreach($actindeb as $actindeb)
              <label hidden>{{$sumactindeb=$sumactindeb+$actindeb->sumamount}}</label>
                <tr>
                  <td scope="row" class="rows">{{$actindeb->accountName}}</td>
                  <td class="cols import">-{{$actindeb->sumamount}}</td>
                </tr>
              @endforeach
              <tr>
                <td scope="row" class="rows"></td>
                <td class="cols import"><hr>{{$sumactincred-$sumactindeb}}</td>
              </tr>
              <tr>
                <th scope="row" class="rows">Actividades de financiamiento</th>
                <td class="cols"></td>
              </tr>
              @foreach($actficred as $actficred)
                <label hidden>{{$sumactficred=$sumactficred+$actindeb->sumamount}}</label>
                <tr>
                  <td scope="row" class="item">{{$actindeb->accountName}}</th>
                  <td class="cols import">-{{$actindeb->sumamount}}</td>
                </tr>
              @endforeach
              @foreach($actfideb as $actfideb)
                <label hidden>{{$sumactfideb=$sumactfideb+$actfideb->sumamount}}</label>
                <tr>
                  <td scope="row" class="item">{{$actfideb->accountName}}</th>
                  <td class="cols import">-{{$actfideb->sumamount}}</td>
                </tr>
              @endforeach
              <tr>
                <td scope="row" class="item"></td>
                <td class="cols import"><hr>{{$sumactficred-$sumactfideb}}</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
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
