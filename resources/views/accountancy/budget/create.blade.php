@extends('layouts.app')

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
                      <label>Concepto:</label>
                      <input type="text" class="form-control" name="conceptadd" id="conceptadd" required/>
                    </div>
                  </div>
                <div class="row">
                  <div class="col-6">
                    <label>Cantidad:</label>
                    <input type="text" class="form-control" id="amountadd" name="amountadd" onkeypress="return filterFloat(event,this);" onblur="verifyamount();" required/>
                  </div>
                </div>
                <div class="row">
                  <div class="col-6">
                    <label>Confirmar cantidad:</label>
                    <input type="text" class="form-control" id="confirmamountadd" name="confirmamountadd" onblur="verifyamount();" onkeypress="return filterFloat(event,this);" required/>
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
