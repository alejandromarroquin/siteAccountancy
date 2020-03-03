@extends('layouts.app')

@section('styles')
  <link href="{{asset('css/balancesheet.css')}}" rel="stylesheet">
@endsection

@section('content')
<div id="page-wrapper" class="p-4">
  <div class="row mt-4" style="margin-left:20rem;">
    <div class="card-body">
      <div class="row">
        <div class="col-lg-12 col-xl-12">
          <div class="row">
            <div class="col">
              <h1 class="page-header">Balance general:</h1>
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
            <input type="text" name="businessName" value="{{$information->businessName}}" hidden>
              <label>{{$information->businessName}}</label><br/>
            @endforeach
            <label>Balance General al </label>
            <label id="date"></label>
          </div>
          <div class="row content">
            <div class="col activo">
              <label class="title">
                Activo
              </label>
              <table>
                <tbody>
                  @foreach($activos as $activo)
                    <tr>
                      <td class="accountname">{{$activo->accountName}}</td>
                      <td>{{$activo->sumcred}}</td>
                      <label hidden>{{$sumact=$sumact+$activo->sumcred}}</label>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <div class="col pasivo-capital">
              <div class="row pasivo">
                <label class="title">
                  Pasivo
                </label>
                <table>
                  <tbody>
                    @foreach($pasivos as $pasivo)
                      <tr>
                        <td class="accountname">{{$pasivo->accountName}}</td>
                        <td>{{$pasivo->sumamount}}</td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <div class="row capital">
                <label class="title">
                  Capital
                </label>
                <table>
                  <tbody>
                    @foreach($capital as $capital)
                      <tr>
                        <td class="accountname">{{$capital->accountName}}</td>
                        <td>{{$capital->sumamount}}</td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>

          </div>
          <label>Total activo: {{$sumact}}</label>
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
  <script src="{{ asset('js/balancesheet.js') }}"></script>
@endsection
