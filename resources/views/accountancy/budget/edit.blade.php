@extends('layouts.app')

@section('styles')
  <link rel="stylesheet" href="{{asset('css/budget.css')}}">
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
          <form action="/budgetcreate" method="POST" role="form" id="budgetform">
          {{ csrf_field() }}
            <div class="row">
              <div class="col-6">
                <input type="text" name="idbudget" value="{{$idbudget}}" hidden>
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
                <input class="form-control" type="date" name="start" id="inicio" value="{{$start}}" required/>
              </div>
              <div class="col-3">
                <label>Hasta:</label>
                <input class="form-control" type="date" name="end" id="fin" value="{{$end}}" required/>
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
                        <input type="text" name="idexpensefix[]" value="{{$data->idexpense}}" hidden>
                        <td><input type="text" name="conceptfix[]" value="{{$data->concept}}" required/></td>
                        <td>$<input type="text" name="amountfix[]" value="{{$data->amount}}" onchange="sumAmounts();" onkeypress="return filterFloat(event,this);" required/></td>
                        <td>
                          <select name="categoryfix[]">
                            <option selected hidden>{{$data->category}}</option>
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
                        @if($data->purchases==1)
                          <td class="purchases"><input type="checkbox" name="purchasesfix[]" checked></td>
                        @else
                          <td class="purchases"><input type="checkbox" name="purchasesfix[]"></td>
                        @endif
                      </tr>
                    @endif
                  @endforeach
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
                  @foreach($budget as $data)
                    @if($data->type==2)
                      <tr id="trvar1">
                        <input type="text" name="idexpensevar[]" value="{{$data->idexpense}}" hidden>
                        <td><input type="text" name="conceptvar[]" value="{{$data->concept}}" required/></td>
                        <td>$<input type="text" name="amountvar[]" value="{{$data->amount}}" onchange="sumAmounts();" onkeypress="return filterFloat(event,this);" required/></td>
                        <td>
                          <select name="categoryvar[]">
                            <option selected hidden>{{$data->category}}</option>
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
                        @if($data->purchases==1)
                          <td class="purchases"><input type="checkbox" name="purchasesvar[]" checked></td>
                        @else
                          <td class="purchases"><input type="checkbox" name="purchasesvar[]"></td>
                        @endif
                      </tr>
                    @endif
                  @endforeach
                  <tr>
                    <td colspan="4" class="btnadd"><button type="button" class="btn btn-primary addvar">Agregar</button></td>
                  </tr>
                </table>
              </div>
            </div>
            <div class="row">
              <div class="col-3">
                <label>Total:</label>
                <input class="form-control" type="text" name="total" id="total" value="{{$total}}" readonly/>
              </div>
            </div>
            <input class="btn btn-primary" type="button" id="updateform" value="Actualizar">
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
  <script src="{{ asset('js/view_budgetedit.js') }}"></script>
@endsection
