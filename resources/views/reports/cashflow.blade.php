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
            <form action="/downloadbalancesheet/2019-12-27/2020-11-17/d&c" method="GET">
              <input type="text" name="initialdate" value="" hidden>
              <input type="text" name="finaldate" value="" hidden>
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
            <label>Estado de resultados al</label>
            <label id="date"></label>
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
              <tr>
                <td scope="row" class="item">La</th>
                <td class="cols import">$4424</td>
              </tr>
              <tr>
                <th scope="row" class="rows">Actividades de inversión</th>
                <td class="cols"></td>
              </tr>
              <tr>
                <td scope="row" class="item">La</th>
                <td class="cols import">$4424</td>
              </tr>
              <tr>
                <th scope="row" class="rows">Actividades de financiamiento</th>
                <td class="cols"></td>
              </tr>
              <tr>
                <td scope="row" class="item">La</th>
                <td class="cols import">$4424</td>
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
