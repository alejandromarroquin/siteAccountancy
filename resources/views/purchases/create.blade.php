@extends('layouts.app')

@section('content')
<div id="page-wrapper" class="p-4">
  <div class="row mt-4" style="margin-left:20rem;">
    <div class="card-body">
      <div class="row">
        <div class="col-lg-12 col-xl-12">
          <h1 class="page-header">Solicitud de compra</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 col-xl-12">
          <form action="/purchasecreate" method="POST" role="form">
            {{ csrf_field() }}
            <div class="row">
              <div class="col-2">
                <label>Fecha:</label>
                <input type="text" class="form-control" name="date" value="{{$currentdate}}" readonly required/>
              </div>
            </div>
            <div class="row">
              <div class="col-5">
                <label>Concepto:</label>
                <input type="text" class="form-control" id="concept" name="concept" required/>
              </div>
            </div>
            <div class="row">
              <div class="col-5">
                <label>Precio unitario:</label>
                  <input type="text" class="form-control" id="unitcost" name="unitcost" onchange="setSubtotal();ivavalidate();addDecimal('unitcost','subtotal','total','quantity',this);" onkeypress="return filterFloat(event,this);" required/>
              </div>
            </div>
            <div class="row">
              <div class="col-5">
                <label>Cantidad:</label>
                <input type="number" class="form-control" id="quantity" name="quantity" value="1" min="1" onchange="setSubtotal();ivavalidate();"  required/>
              </div>
            </div>
            <div class="row">
              <div class="col-5">
                <label>Subtotal:</label>
                <input type="text" class="form-control" id="subtotal" name="subtotal" readonly required/>
              </div>
            </div>
            <div class="row" style="padding-top:1em;">
              <div class="col">
                <label><strong>Aplicar IVA: </strong></label>
                  <label class="switch">
                  <input class="publish0" type="checkbox" name="checkiva" onclick="ivavalidate();">
                  <span class="slider round"></span>
                </label>
              </div>
            </div>
            <div class="row">
              <div class="col-5">
                <label>IVA:</label>
                <input type="text" class="form-control" id="iva" name="iva" readonly/>
              </div>
            </div>
            <div class="row">
              <div class="col-5">
                <label>Total:</label>
                <input type="text" class="form-control" id="total" name="total" readonly required/>
              </div>
            </div>
            <input class="btn btn-primary" type="submit" value="Registrar">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
  <script src="{{ asset('js/view_purchases.js') }}"></script>
@endsection