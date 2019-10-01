@extends('layouts.app')

@section('content')
<div class="container" id="content" style="background-color:#F6F6F6;">
  <script src="{{ asset('js/view-customer/view-customer.js') }}" defer></script>

  <div id="page-wrapper" class="p-4">
    <div class="row">
        <div class="col-lg-12 col-xl-12">
          <h1 class="page-header">Nueva factura</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 col-xl-12">
          <form action="" method="POST">
            <div class="row">
              <div class="col">
                <label>Compañia:</label>
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label>Método de pago:</label>
                <select class="form-control">
                  <option>Efectivo</option>
                </select>
              </div>
              <div class="col">
                <label>Tipo de pago:</label>
                <select class="form-control">
                  <option>Efectivo</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label>Lugar de expedición:</label>
                <input type="text" class="form-control">
              </div>
              <div class="col">
                <label>Fecha de expedición:</label>
                <input type="date" class="form-control">
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label>Número de aduana:</label>
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label>Subtotal:</label>
                  <input type="text" class="form-control">
              </div>
              <div class="col">
                <label>IVA:</label>
                <input type="text" class="form-control">
              </div>
              <div class="col">
                <label>Total:</label>
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label>Cantidad con letra:</label>
                  <input type="text" class="form-control">
              </div>
            </div>
            <input class="btn btn-primary" type="submit" value="Facturar">
          </form>
        </div>
      </div>
    </div>
</div>
@endsection
