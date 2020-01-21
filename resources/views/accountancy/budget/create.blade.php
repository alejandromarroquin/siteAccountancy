@extends('layouts.app')

@section('styles')
  <link rel="stylesheet" href="css/budget.css">
@endsection

@section('content')
<div id="page-wrapper" class="p-4">
  <div class="row mt-4" style="margin-left:20rem;">
    <div class="card-body">
      <div class="row">
        <div class="col-lg-12 col-xl-12">
          <h1 class="page-header">Presupuesto</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 col-xl-12">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link add active" id="add-tab" data-toggle="tab" href="#add" role="tab" aria-controls="add" aria-selected="true">Agregar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link consult" id="consult-tab" data-toggle="tab" href="#consult" role="tab" aria-controls="consult" aria-selected="false">Consultar</a>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="add" role="tabpanel" aria-labelledby="add-tab-tab">
              <form action="" method="" role="form" id="budgetform">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-6">
                      <label>Tipo:</label>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="typebudget" id="typebudget1" value="1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                          Mensual
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="typebudget" id="typebudget2" value="2">
                        <label class="form-check-label" for="exampleRadios2">
                          Anual
                        </label>
                      </div>
                    </div>
                </div>
                <div class="row" id="alert">
                  <div class="alert alert-danger" role="alert">
                    La fecha de inicio no puede ser mayor a la final
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <label>Vigencia:</label>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <label>De:</label>
                    <input type="date" class="form-control" id="inicio" name="" required/>
                  </div>
                  <div class="col">
                    <label>Hasta:</label>
                    <input type="date" class="form-control" id="fin" name="" required/>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <input type="text" name="cont" value="1" hidden/>
                    <label class="costfix">Costos Fijos</label>
                    <table class="tabfix">
                      <tr>
                        <th>Concepto</th>
                        <th>Monto</th>
                        <th>Categoria</th>
                        <th>Compras</th>
                      </tr>
                      <tr id="trfix1">
                        <td><input type="text" name="conceptfix[]"></td>
                        <td>$<input type="text" name="amountfix[]" id="amountfix1" onchange="sumAmounts();"></td>
                        <td>
                          <select name="categoryfix[]">
                            <option>1</option>
                          </select>
                        </td>
                        <td class="purchases"><input type="checkbox" name="purchasesfix[]"></td>
                      </tr>
                      <tr>
                        <td colspan="4" class="btnadd"><button type="button" class="btn btn-primary addfixed">Agregar</button></td>
                      </tr>
                    </table>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <input type="text" name="cont" value="1" hidden/>
                    <label class="costfix">Costos Variables</label>
                    <table class="tabvar">
                      <tr>
                        <th>Concepto</th>
                        <th>Monto</th>
                        <th>Categoria</th>
                        <th>Compras</th>
                      </tr>
                      <tr id="trvar1">
                        <td><input type="text" name="conceptvar[]"></td>
                        <td>$<input type="text" name="amountvar[]" id="amountvar1" onchange="sumAmounts();"></td>
                        <td>
                          <select name="categoryvar[]">
                            <option>1</option>
                          </select>
                        </td>
                        <td class="purchases"><input type="checkbox" name="purchasesvar[]"></td>
                      </tr>
                      <tr>
                        <td colspan="4" class="btnadd"><button type="button" class="btn btn-primary addvar">Agregar</button></td>
                      </tr>
                    </table>
                  </div>
                </div>
                <div class="row">
                  <div class="col-3">
                    <label>Total:</label>
                    <input type="text" class="form-control" id="amountadd" name="amountadd" readonly required/>
                  </div>
                </div>
                <input class="btn btn-primary" type="button" value="Registrar" id="sendform">
              </form>
            </div>
            <div class="tab-pane fade" id="consult" role="tabpanel" aria-labelledby="consult-tab">
              <form action="budgetcreate" method="POST" role="form">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-6">
                      <label>Concepto:</label>
                      <select class="form-control" name="concept" id="concept">
                        <option selected hidden>Selecciona una subcuenta...</option>
                      </select>
                    </div>
                  </div>
                <div class="row">
                  <div class="col-6">
                    <label>Cantidad:</label>
                    <input type="text" class="form-control" id="amountconsult" name="amount" onkeypress="return filterFloat(event,this);" required readonly/>
                  </div>
                </div>
                <div class="row" hidden/>
                  <div class="col-6">
                    <label>Confirmar cantidad:</label>
                    <input type="text" class="form-control" id="confirmamount" name="confirmamount" onblur="verifyamount();" onkeypress="return filterFloat(event,this);" required/>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('scripts')
  <script src="{{ asset('js/view_budgets.js') }}"></script>
@endsection
