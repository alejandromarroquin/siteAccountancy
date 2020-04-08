@extends('layouts.app')

@section('styles')
  <link href="{{asset('css/budget.css')}}" rel="stylesheet">
@endsection

@section('content')

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
                    <input class="form-control" type="date" name="start" id="inicio" required/>
                  </div>
                  <div class="col-3">
                    <label>Hasta:</label>
                    <input class="form-control" type="date" name="end" id="fin" required/>
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
                        <td><input type="text" name="conceptfix[]" required/></td>
                        <td>$<input type="text" name="amountfix[]" id="amountfix1" onchange="sumAmounts();" onkeypress="return filterFloat(event,this);" required/></td>
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
                        <td><input type="text" name="conceptvar[]" required/></td>
                        <td>$<input type="text" name="amountvar[]" id="amountvar1" onchange="sumAmounts();" onkeypress="return filterFloat(event,this);" required/></td>
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
                <input class="btn btn-primary" type="button" id="sendform" value="Registrar">
              </form>
            </div>
            <div class="tab-pane fade" id="consult" role="tabpanel" aria-labelledby="consult-tab">
              <form action="budgetcreate" method="POST" role="form">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-6">
                      <label>Último presupuesto:</label>
                    </div>
                </div>
                <div class="row">
                  <div class="col-3">
                    <label>Vigente desde:</label>
                    <input class="form-control" type="text" name="" value="{{$start}}" disabled/>
                  </div>
                  <div class="col-3">
                    <label>Vigente hasta:</label>
                    <input class="form-control" type="text" name="" value="{{$end}}" disabled/>
                  </div>
                </div>
                <div class="row">
                  <div class="col-3">
                    <label>Presupuesto general:</label>
                    <input type="text" name="totalhidd" value="{{$total}}" hidden/>
                    <input class="form-control" type="text" name="totalbudget" onkeypress="return filterFloat(event,this);" required readonly/>
                  </div>
                  <div class="col-3">
                    <label>Reservado:</label>
                    <input type="text" name="reservedhidd" value="{{$reserved}}" hidden/>
                    <input class="form-control" type="text" name="reserved" onkeypress="return filterFloat(event,this);" required readonly/>
                  </div>
                  <div class="col-3">
                    <label>Disponible:</label>
                    <input type="text" name="availablehidd" value="{{$available}}" hidden/>
                    <input class="form-control" type="text" name="available" onkeypress="return filterFloat(event,this);" required readonly/>
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
                      @foreach($budget as $data)
                        @if($data->type==1)
                          <tr id="trfix1">
                            <td>
                              <label>{{$data->concept}}</label>
                            </td>
                            <td>$
                              <label>{{$data->amount}}</label>
                            </td>
                            <td>
                              <label>{{$data->category}}</label>
                            </td>
                            <td class="purchases">
                              @if($data->purchases==1)
                                <input type="checkbox" name="" value="" checked disabled/>
                              @else
                                <input type="checkbox" name="" value="" disabled/>
                              @endif
                            </td>
                          </tr>
                        @endif
                      @endforeach
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
                      @foreach($budget as $data)
                        @if($data->type==2)
                          <tr id="trvar1">
                            <td>
                              <label>{{$data->concept}}</label>
                            </td>
                            <td>$
                              <label>{{$data->amount}}</label>
                            </td>
                            <td>
                              <label>{{$data->category}}</label>
                            </td>
                            <td class="purchases">
                              @if($data->purchases==1)
                                <input type="checkbox" name="" value="" checked disabled/>
                              @else
                                <input type="checkbox" name="" value="" disabled/>
                              @endif
                            </td>
                          </tr>
                          @endif
                        @endforeach
                      </table>
                    </div>
                  </div>
                  <a href="/budgetedit/{{$start}}" class="btn btn-warning">Editar</a>
                  <button type="button" class="btn btn-danger delete" value="{{$idbudget}}">Eliminar</button>
                </form>
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
  <script src="{{ asset('js/view_budgets.js') }}"></script>
@endsection
