@extends('layouts.app')

@section('content')
<div id="page-wrapper" class="p-4">
  <div class="row mt-4" style="margin-left:20rem;">
    <div class="card-body">
      <div class="row">
        <div class="col-lg-12 col-xl-12">
          <h1 class="page-header">Flujo de capital</h1>
        </div>
      </div>
        <div class="col-lg-8 col-xl-12">
          <form action="movementscreate" method="POST" role="form">
            {{ csrf_field() }}
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="ingresos-tab" data-toggle="tab" href="#ingresos" role="tab" aria-controls="ingresos" aria-selected="true">Ingresos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="egresos-tab" data-toggle="tab" href="#egresos" role="tab" aria-controls="egresos" aria-selected="false">Egresos</a>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="ingresos" role="tabpanel" aria-labelledby="ingresos-tab">
                <div class="row">
                  <div class="col-6">
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
                  <div class="col-6">
                    <label>Subcuenta:</label>
                    <select class="form-control" name="subaccount" id="subaccount">
                      <option selected hidden>Selecciona una subcuenta...</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-6">
                    <label>Concepto:</label>
                    <input class="form-control" name="concept">
                  </div>
                </div>
                <div class="row">
                  <div class="col-6">
                    <label>Método de pago:</label>
                    <select class="form-control">
                      <option>Efectivo</option>
                      <option>Tarjeta de crédito</option>
                      <option>Tarjeta de débito</option>
                      <option>Cheque</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-6">
                    <label>Cantidad monetaria:</label>
                    <input class="form-control" name="amount" id="amount">
                  </div>
                </div>
                <div class="row">
                  <div class="col-6">
                    <label>Confirmar cantidad monetaria:</label>
                    <input class="form-control" name="confirmamount" id="confirmamount">
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="egresos" role="tabpanel" aria-labelledby="egresos-tab">
                <div class="row">
                  <div class="col-6">
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
                  <div class="col-6">
                    <label>Subcuenta:</label>
                    <select class="form-control" name="subaccount" id="subaccount">
                      <option selected hidden>Selecciona una subcuenta...</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <input class="btn btn-primary" type="submit" value="Registrar">
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  <script src="{{ asset('js/view_cashflow.js') }}"></script>
@endsection
