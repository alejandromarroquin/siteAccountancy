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
          <h1 class="page-header">Catálogo de cuentas</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 col-xl-12">
          <form action="" method="" role="form" id="accountcatalogform">
            {{ csrf_field() }}
            <div class="row">
              <div class="col">
                <label>Cuenta:</label>
                <select class="form-control" name="account" id="account">
                  <option selected hidden>Selecciona una cuenta...</option>
                  @foreach($accounts as $account)
                      <option value="{{$account->groupcode}}">{{$account->accountname}}</option>
                  @endforeach
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
            <div class="row">
              <div class="col">
                <label>Saldo deudor:</label>
                <input type="text" name="debtor" class="form-control">
              </div>
              <div class="col">
                <label>Saldo acreedor</label>
                <input type="text" name="creditor" class="form-control">
              </div>
            </div>
            <input class="btn btn-primary" type="button" value="Agregar" id="agregar">
          </form>
        </div>
      </div>
      <div class="limiter">
  		<div class="container-table100">
  			<div class="wrap-table100">
  				<div class="table100 ver1 m-b-110">
  					<div class="table100-head">
  						<table>
  							<thead>
  								<tr class="row100 head">
  									<th class="cell100 column1">Código</th>
  									<th class="cell100 column2">Cuenta</th>
  									<th class="cell100 column3">Eliminar</th>
  								</tr>
  							</thead>
  						</table>
  					</div>
            <div class="table100-body js-pscroll">
                <table>
                  <tbody id="tbody">
        						@foreach($catalog as $row)
                      <tr class="row100 body">
                        <td class="cell100 column1">'{{$row->code}}'</td>
                        <td class="cell100 column2">'{{$row->accountName}}'</td>
                        <td class="cell100 column3"><button type="button" class="btn btn-danger delete" value="{{$row->code}}">Eliminar</button></td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
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
  <script src="{{ asset('js/view_accounts.js') }}"></script>

	<script src="table/js/main.js"></script>
@endsection
