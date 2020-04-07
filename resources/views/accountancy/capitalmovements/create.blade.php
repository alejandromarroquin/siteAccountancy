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
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="ingresos-tab" data-toggle="tab" href="#ingresos" role="tab" aria-controls="ingresos" aria-selected="true">Flujo de capital</a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="ingresos" role="tabpanel" aria-labelledby="ingresos-tab">
            <form action="" method="" id="cashflowform">
            {{ csrf_field() }}
              <input type="text" value="1" name="flag" readonly hidden/>
              <div class="row">
                <div class="col-4">
                  <label>Fecha:</label>
                  <input class="form-control" type="text" name="date" hidden id="datetype2">
                  <input class="form-control" type="text" name="stringdate" readonly>
                </div>
              </div>
              <div class="row">
                <div class="col-6">
                  <label>Cuenta origen:</label>
                  <select class="form-control" name="accountdebit" id="accountdebit">
                    <option selected hidden>Selecciona una cuenta...</option>
                    @foreach($accounts as $account)
                      <option value="{{$account->code}}">{{$account->accountName}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-6">
                  <label>Subcuenta origen:</label>
                  <select class="form-control" name="subaccountdebit">
                    <option selected hidden>Selecciona uno...</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-6">
                  <label>Cuenta destino:</label>
                  <select class="form-control" name="accountcredit" id="accountcredit">
                    <option selected hidden>Selecciona una cuenta...</option>
                    @foreach($accounts as $account)
                      <option value="{{$account->code}}">{{$account->accountName}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-6">
                  <label>Subcuenta destino:</label>
                  <select class="form-control" name="subaccountcredit">
                    <option selected hidden>Selecciona uno...</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-6">
                <label>Tipo de flujo:</label>
                  <select name="typeflow" class="form-control">
                    <option>Ingreso</option>
                    <option>Egreso</option>
                    <option>No ingreso y no egreso</option>
                    <option>Ingreso por cheque</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-6">
                  <label>Actividad:</label>
                  <select class="form-control" name="activity">
                    <option>Operación</option>
                    <option>Inversión</option>
                    <option>Financiamiento</option>
                    <option>No aplica</option>
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
              <input class="btn btn-primary" type="button" value="Registrar" id="sendform">
            </form>
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
  <script src="{{ asset('js/view_cashflow.js') }}"></script>
@endsection
