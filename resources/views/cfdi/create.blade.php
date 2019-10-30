@extends('layouts.app')

@section('styles')
  <link href="{{ asset('css/view_accounts.css')}}" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="table/vendor/perfect-scrollbar/perfect-scrollbar.css">
	<link rel="stylesheet" type="text/css" href="table/css/util.css">
	<link rel="stylesheet" type="text/css" href="table/css/main.css">
@endsection

@section('content')
<div id="page-wrapper" class="p-4">
  <div class="row mt-4" style="margin-left:20rem;">
    <div class="card-body">
      <div class="row">
        <div class="col-lg-12 col-xl-12">
          <h1 class="page-header">Facturación</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 col-xl-12">
          <form action="" method="" role="form">
            {{ csrf_field() }}
            <div class="row">
              <div class="col">
                <label>Cuenta:</label>
                <select class="form-control" name="account" id="account">
                  <option selected hidden>Selecciona una cuenta...</option>

                </select>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label>Subcuenta:</label>
                <select class="form-control" name="subaccount" id="subaccount">
                  <option selected hidden>Selecciona una subcuenta...</option>
                </select>
              </div>
            </div>
            <input class="btn btn-primary" type="button" value="Agregar" id="agregar">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
  <script src="{{ asset('js/view_accounts.js') }}"></script>

<!--===============================================================================================-->
	<script src="table/js/main.js"></script>
@endsection
