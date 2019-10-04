@extends('layouts.app')

@section('content')
<div class="container" id="content" style="background-color:#F6F6F6;">
  <div id="page-wrapper" class="p-4">
      <div class="card-body">
        <div class="row">
          <div class="col-lg-12 col-xl-12">
            <h1 class="page-header">Registrar movimiento de capital</h1>
          </div>
        </div>
      <div class="row">
        <div class="col-lg-8 col-xl-12">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="venta-tab" data-toggle="tab" href="#venta" role="tab" aria-controls="venta" aria-selected="true">Venta</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="compra-tab" data-toggle="tab" href="#compra" role="tab" aria-controls="compra" aria-selected="false">Compra</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="credito-tab" data-toggle="tab" href="#credito" role="tab" aria-controls="credito" aria-selected="false">Crédito</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="nomina-tab" data-toggle="tab" href="#nomina" role="tab" aria-controls="nomina" aria-selected="false">Nómina</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="abonos-tab" data-toggle="tab" href="#abonos" role="tab" aria-controls="abonos" aria-selected="false">Abonos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="gastos-tab" data-toggle="tab" href="#gastos" role="tab" aria-controls="gastos" aria-selected="false">Gastos</a>
              </li>
            </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="venta" role="tabpanel" aria-labelledby="venta-tab">
              <form action="" method="POST">
                <div class="row">
                  <div class="col">
                    <label>Cliente:</label>
                    <select class="form-control">
                      <option></option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <label>Tipo:</label>
                    <select class="form-control" name="tipoventa">
                      <option selected hidden/>Seleccione una opción...</option>
                      <option>Contado</option>
                      <option>Crédito</option>
                    </select>
                  </div>
                </div>

                <div class="row">
                  <div class="col">
                    <label>Producto o servicio:</label>
                    <input type="text" class="form-control">
                  </div>
                  <div class="col">
                    <label>Cantidad:</label>
                    <input type="number" class="form-control" min="1" value="1">
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <label>Cantidad con letra:</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <label>Descripción:</label>
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
                <input class="btn btn-primary" type="submit" value="Registrar">
              </form>
            </div>
            <div class="tab-pane" id="compra" role="tabpanel" aria-labelledby="compra-tab">
              <form action="" method="POST">
                <div class="row">
                  <div class="col">
                    <label>Proveedor:</label>
                    <select class="form-control">
                      <option></option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <label>Tipo:</label>
                    <select class="form-control" name="tipoventa">
                      <option selected hidden/>Seleccione una opción...</option>
                      <option>Contado</option>
                      <option>Crédito</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <label>Producto:</label>
                    <input type="text" class="form-control">
                  </div>
                  <div class="col">
                    <label>Cantidad:</label>
                    <input type="number" class="form-control" min="1" value="1">
                  </div>
                </div>
                <input class="btn btn-primary" type="submit" value="Registrar">
              </form>
            </div>
            <div class="tab-pane" id="credito" role="tabpanel" aria-labelledby="credito-tab">
              <form action="" method="POST">
                <div class="row">
                  <div class="col">
                    <label>Cliente:</label>
                    <select class="form-control">
                      <option></option>
                    </select>
                  </div>
                </div>
                <input class="btn btn-primary" type="submit" value="Registrar">
              </form>
            </div>
            <div class="tab-pane" id="nomina" role="tabpanel" aria-labelledby="nomina-tab">4</div>
            <div class="tab-pane" id="abonos" role="tabpanel" aria-labelledby="abonos-tab">5</div>
            <div class="tab-pane" id="gastos" role="tabpanel" aria-labelledby="gastos-tab">6</div>
          </div>
        </div>
      </div>
    </div>
    </div>
</div>
@endsection
