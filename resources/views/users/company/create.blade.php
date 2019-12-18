@extends('layouts.app')

@section('content')
<div id="page-wrapper" class="p-4">
  <div class="row mt-4" style="margin-left:20rem;">
    <div class="card-body">
      <div class="row">
        <div class="col-lg-12 col-xl-12">
          <h1 class="page-header">Registrar Cliente</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 col-xl-12">
          <form action="" method="" role="form" id="companyform">
            {{ csrf_field() }}
            <div class="row">
              <div class="col">
                <label>Nombre del responsable:</label>
                <input type="text" class="form-control" name="responsible" id="responsible" required/>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label>Puesto del responsable:</label>
                <input type="text" class="form-control" name="positionresponsible" id="positionresponsible" required/>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label>Razón social:</label>
                <input type="text" class="form-control" name="businessname" placeholder="Ej. Empresa S.A. DE C.V." required/>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label>RCF:</label>
                <input type="text" class="form-control" id="rfc" name="rfc" onInput="aMayusculas(this.value,this.id)" minlength="12" maxlength="13" required/>
              </div>
              <div class="col">
                <label>Régimen fiscal:</label>
                <select class="form-control" name="taxregime" id="taxregime">
                  <option selected hidden>Selecciona un regimen...</option>
                  <option value="fisica">Física</option>
                  <option value="moral">Moral</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label>Télefono de oficina:</label>
                <input type="text" class="form-control" id="phoneoffice" name="phoneoffice" minlength="10" maxlength="10" placeholder="10 digitos sin espacios" onkeypress="return soloNumeros(event);" required/>
              </div>
              <div class="col">
                <label>Extención:</label>
                <input type="text" class="form-control" id="extension" name="extension"  maxlength="6" placeholder="Máximo 6 digitos sin espacios" onkeypress="return soloNumeros(event);">
              </div>
              <div class="col">
                <label>Celular:</label>
                <input type="text" class="form-control" id="cellphone" name="cellphone" minlength="10" maxlength="10" placeholder="10 digitos sin espacios" onkeypress="return soloNumeros(event);">
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label>Email:</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Ej. nombre@tuempresa.com" required/>
              </div>
              <div class="col">
                <label>Página web:</label>
                <input type="text" class="form-control" id="web" name="web" placeholder="Ej. www.tuempresa.com">
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label>Calle:</label>
                <input type="text" class="form-control" id="street" name="street" required/>
              </div>
              <div class="col">
                <label>Número exterior:</label>
                <input type="text" class="form-control" id="numext" name="numext" maxlength="4">
              </div>
              <div class="col">
                <label>Número interior:</label>
                <input type="text" class="form-control" id="numint" name="numint" maxlength="3">
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label>Colonia:</label>
                <input type="text" class="form-control" id="colony" name="colony" required/>
              </div>
              <div class="col">
                <label>Municipio:</label>
                <input type="text" class="form-control" id="city" name="city" required/>
              </div>
              <div class="col">
                <label>Estado:</label>
                <input type="text" class="form-control" id="estate" name="estate" onkeypress="return soloLetras(event);" required/>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label>Pais:</label>
                <input type="text" class="form-control" id="contry" name="contry" onkeypress="return soloLetras(event);" value="México" readonly required/>
              </div>
              <div class="col">
                <label>Cóigo postal:</label>
                <input type="text" class="form-control" id="postalcode" name="postalcode"minlength="5" maxlength="5" onkeypress="return soloNumeros(event);" required/>
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

@section('scripts')
  <script src="{{ asset('js/view_registercompany.js') }}"></script>
@endsection
