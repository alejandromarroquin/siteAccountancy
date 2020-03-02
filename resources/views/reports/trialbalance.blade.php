@extends('layouts.app')

@section('styles')
  <link href="{{ asset('css/trialbalance.css')}}" rel="stylesheet">
@endsection

@section('content')
<div id="page-wrapper" class="p-4">
  <div class="row mt-4" style="margin-left:20rem;">
    <div class="card-body">
      <div class="row">
        <div class="col">
          <h1 class="page-header">Balanza de comprobación:</h1>
        </div>
        <form class="" action="" method="">
          <div class="col">
            <input type="text" name="cont" value="{{$cont}}" hidden>
            <button type="button" class="btn btn-primary" id="download">Descargar</button>
          </div>
        </form>
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
              @foreach($accountsname as $dta)
                <tr>
                  <th scope="row" class="cols">{{$cont=$cont+1}}</th>
                  <td class="colsname">{{$dta->accountName}}</td>
                  <td class="cols">
                    @if(array_key_exists($dta->accountName,$arrayaccountd))
                      {{$arrayaccountd[$dta->accountName]}}
                      <label hidden>{{$summd=$summd+$arrayaccountd[$dta->accountName]}}</label>
                    @endif
                  </td>
                  <td class="cols">
                    @if(array_key_exists($dta->accountName,$arrayaccountc))
                      {{$arrayaccountc[$dta->accountName]}}
                      <label hidden>{{$summa=$summa+$arrayaccountc[$dta->accountName]}}</label>
                    @endif
                  </td>
                  <td class="cols">
                    @if(array_key_exists($dta->accountName,$arrayaccountd) && array_key_exists($dta->accountName,$arrayaccountc))
                      @if($arrayaccountd[$dta->accountName]>$arrayaccountc[$dta->accountName])
                        {{$arrayaccountd[$dta->accountName]-$arrayaccountc[$dta->accountName]}}
                        <label hidden>{{$sumsd=$sumsd+$arrayaccountd[$dta->accountName]-$arrayaccountc[$dta->accountName]}}</label>
                      @endif
                    @else
                      @if(!array_key_exists($dta->accountName,$arrayaccountc))
                        {{$arrayaccountd[$dta->accountName]}}
                        <label hidden>{{$sumsd=$sumsd+$arrayaccountd[$dta->accountName]}}</label>
                      @endif
                    @endif
                  </td>
                  <td class="cols">
                    @if(array_key_exists($dta->accountName,$arrayaccountd) && array_key_exists($dta->accountName,$arrayaccountc))
                      @if($arrayaccountd[$dta->accountName]<$arrayaccountc[$dta->accountName])
                        {{$sumsa=$sumsa+$arrayaccountc[$dta->accountName]-$arrayaccountd[$dta->accountName]}}
                      @endif
                    @else
                      @if(!array_key_exists($dta->accountName,$arrayaccountd))
                        {{$sumsa=$sumsa+$arrayaccountc[$dta->accountName]}}
                      @endif
                    @endif
                  </td>
                </tr>
              @endforeach

              <tr>
                <td></td>
                <td class="total">Total</td>
                <td class="cols">{{$summd}}</td>
                <td class="cols">{{$summa}}</td>
                <td class="cols">{{$sumsd}}</td>
                <td class="cols">{{$sumsa}}</td>
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
  <script src="{{ asset('js/trialbalance.js') }}"></script>
@endsection
