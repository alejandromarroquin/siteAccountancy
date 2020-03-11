@extends('layouts.app')

@section('styles')
  <link href="{{asset('css/periodpolicies.css')}}" rel="stylesheet">
@endsection

@section('content')
<div id="page-wrapper" class="p-4">
  <div class="row mt-4" style="margin-left:20rem;">
    <div class="card-body">
      <div class="row">
        <div class="col">
          <h1 class="page-header">Auxiliares</h1>
        </div>
        <form action="/" method="GET">
          <div class="col">
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
            <label>Auxiliares al</label>
            <label id="date"></label>
          </div>
          <table>
            <tr>
              <th>Fecha</th>
              <th>Referencia</th>
              <th>Proveedor</th>
              <th>Débito</th>
              <th>Crédito</th>
              <th>Saldo</th>
            </tr>
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
