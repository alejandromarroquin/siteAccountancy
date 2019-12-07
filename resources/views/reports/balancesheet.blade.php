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
          <h1 class="page-header">Balance general:</h1>
        </div>
      </div>
      <div class="row margin">
        <div class="col-lg-8 col-xl-12">
          <div class="container information">
            @foreach($company as $information)
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
            </div>
            <div class="col pasivo-capital">
              <div class="row pasivo">
                <label class="title">
                  Pasivo
                </label>
              </div>
              <div class="row capital">
                <label class="title">
                  Capital
                </label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
  <script src="{{ asset('js/balancesheet.js') }}"></script>
@endsection
