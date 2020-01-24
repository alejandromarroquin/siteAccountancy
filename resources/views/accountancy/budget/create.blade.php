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
              <form action="/budgetcreate" method="POST" role="form" id="budgetform">
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
                  <div class="col-3">
                    <label>De:</label>
                    <input type="date" class="form-control" id="inicio" name="start" required/>
                  </div>
                  <div class="col-3">
                    <label>Hasta:</label>
                    <input type="date" class="form-control" id="fin" name="end" required/>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <input type="text" name="contfix" value="1" hidden/>
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
                        <td>$<input type="text" name="amountfix[]" id="amountfix1" onchange="sumAmounts();" onkeypress="return filterFloat(event,this);"></td>
                        <td>
                          <select name="categoryfix[]">
                            <option>Arrendamientos y alquileres</option>
                            <option>Reparaciones y mantenimientos</option>
                            <option>Servicios profesionales</option>
                            <option>Transportes</option>
                            <option>Primas de seguros</option>
                            <option>Servicios bancarios</option>
                            <option>Publicidad y propaganda</option>
                            <option>Suministros</option>
                            <option>Servicios exteriores</option>
                            <option>Impuestos y tributos</option>
                            <option>Sueldos y salarios</option>
                            <option>Intereses de préstamos</option>
                            <option>Intereses por anticipos de cobro</option>
                            <option>Otros gastos financieros</option>
                            <option>Principal de préstamos</option>
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
                    <input type="text" name="contvar" value="1" hidden/>
                    <label class="costvar">Costos Variables</label>
                    <table class="tabvar">
                      <tr>
                        <th>Concepto</th>
                        <th>Monto</th>
                        <th>Categoria</th>
                        <th>Compras</th>
                      </tr>
                      <tr id="trvar1">
                        <td><input type="text" name="conceptvar[]"></td>
                        <td>$<input type="text" name="amountvar[]" id="amountvar1" onchange="sumAmounts();" onkeypress="return filterFloat(event,this);"></td>
                        <td>
                          <select name="categoryvar[]">
                            <option>Arrendamientos y alquileres</option>
                            <option>Reparaciones y mantenimientos</option>
                            <option>Servicios profesionales</option>
                            <option>Transportes</option>
                            <option>Primas de seguros</option>
                            <option>Servicios bancarios</option>
                            <option>Publicidad y propaganda</option>
                            <option>Suministros</option>
                            <option>Servicios exteriores</option>
                            <option>Impuestos y tributos</option>
                            <option>Sueldos y salarios</option>
                            <option>Intereses de préstamos</option>
                            <option>Intereses por anticipos de cobro</option>
                            <option>Otros gastos financieros</option>
                            <option>Principal de préstamos</option>
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
                    <input type="text" class="form-control" id="total" name="total" readonly/>
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
                      <label>Presupuesto vigente:</label>
                    </div>
                </div>
                <div class="row">
                  <div class="col-3">
                    <label>Vigente desde:</label>
                    <input class="form-control" type="text" name="" value="" disabled/>
                  </div>
                  <div class="col-3">
                    <label>Vigente hasta:</label>
                    <input class="form-control" type="text" name="" value="" disabled/>
                  </div>
                </div>
                <div class="row">
                  <div class="col-3">
                    <label>Neto:</label>
                    <input type="text" class="form-control" id="amountconsult" name="amount" onkeypress="return filterFloat(event,this);" required readonly/>
                  </div>
                  <div class="col-3">
                    <label>Reservado:</label>
                    <input type="text" class="form-control" id="amountconsult" name="amount" onkeypress="return filterFloat(event,this);" required readonly/>
                  </div>
                  <div class="col-3">
                    <label>Disponible:</label>
                    <input type="text" class="form-control" id="amountconsult" name="amount" onkeypress="return filterFloat(event,this);" required readonly/>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <input type="text" name="contfix" value="1" hidden/>
                    <label class="costfix">Costos Fijos</label>
                    <table class="tabfix">
                      <tr>
                        <th>Concepto</th>
                        <th>Monto</th>
                        <th>Categoria</th>
                        <th>Compras</th>
                      </tr>
                      <tr id="trfix1">
                        <td>

                        </td>
                        <td>$

                        </td>
                        <td>

                        </td>
                        <td class="purchases">

                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <input type="text" name="contvar" value="1" hidden/>
                    <label class="costfix">Costos Variables</label>
                    <table class="tabvar">
                      <tr>
                        <th>Concepto</th>
                        <th>Monto</th>
                        <th>Categoria</th>
                        <th>Compras</th>
                      </tr>
                      <tr id="trvar1">
                        <td>
                          <label>label</label>
                        </td>
                        <td>$
                          <label>label</label>
                        </td>
                        <td>
                          <label>label</label>
                        </td>
                        <td class="purchases">
                          <label>label</label>
                        </td>
                      </tr>
                    </table>
                  </div>
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
