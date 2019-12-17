@extends('layouts.app')
  <link href="{{ asset('css/trialbalance.css')}}" rel="stylesheet">
@section('styles')

@endsection

@section('content')
<div id="page-wrapper" class="p-4">
  <div class="row mt-4" style="margin-left:20rem;">
    <div class="card-body">
      <div class="row">
        <div class="col-lg-12 col-xl-12">
          <h1 class="page-header">Balanza de comprobación:</h1>
        </div>
      </div>
      <div class="row margin">
        <div class="col-lg-8 col-xl-12">
          <div class="container information">
            @foreach($company as $information)
              <label>{{$information->businessName}}</label><br/>
            @endforeach
            <label>Balanza de comprobación al </label>
            <label id="date"></label>
          </div>
          <table class="table">
            <thead>
              <tr>
                <th scope="col" rowspan="2" class="cols rows">ID</th>
                <th scope="col" rowspan="2" class="cols rows">Cuentas</th>
                <th scope="col" colspan="2" class="cols">Movimientos</th>
                <th scope="col" colspan="2" class="cols">Saldos</th>
              </tr>
              <tr>
                <th scope="col" class="cols">Deudor</th>
                <th scope="col" class="cols">Acredor</th>
                <th scope="col" class="cols">Deudor</th>
                <th scope="col" class="cols">Acredor</th>
              </tr>
            </thead>
            <tbody>        
                <tr>
                  <th scope="row" class="cols">1</th>
                  <td class="cols">d</td>
                  <td class="cols">s</td>
                  <td class="cols">s</td>
                  <td class="cols">Otto</td>
                  <td class="cols">@mdo</td>
                </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
  <script src="{{ asset('js/trialbalance.js') }}"></script>
@endsection
