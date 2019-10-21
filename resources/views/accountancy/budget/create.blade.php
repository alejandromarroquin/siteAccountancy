@extends('layouts.app')

@section('content')
<div id="page-wrapper" class="p-4">
  <div class="row mt-4" style="margin-left:20rem;">
    <div class="card-body">
      <div class="row">
        <div class="col-lg-12 col-xl-12">
          <h1 class="page-header">Asignar presupuesto</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 col-xl-12">
          <form action="budgetcreate" method="POST" role="form">
            {{ csrf_field() }}
            <div class="row">
              <div class="col">
                <label>Concepto:</label>
                <select class="form-control" name="concept">
                  <option selected hidden>Seleccione una opción...</option>
                  <option>l</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label>Cantidad:</label>
                <input type="text" class="form-control" id="amount" name="amount" required/>
              </div>
              <div class="col">
                <label>Confirmar cantidad:</label>
                <input type="text" class="form-control" id="confirmamount" name="confirmamount" onblur="verifyamount();" required/>
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
  <script src="{{ asset('js/view_budgets.js') }}"></script>
@endsection
