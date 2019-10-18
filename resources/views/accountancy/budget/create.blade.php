@extends('layouts.app')

@section('content')
<div id="page-wrapper" class="p-4">
  <div class="row mt-4" style="margin-left:20rem;">
    <div class="card-body">
      <div class="row">
        <div class="col-lg-12 col-xl-12">
          <h1 class="page-header">Asignar presupuesto general</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 col-xl-12">
          <form action="empresacreate" method="POST" role="form">
            {{ csrf_field() }}
            <div class="row">
              <div class="col">
                <label>Razón social:</label>
                <input type="text" class="form-control" name="businessname" required/>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label>RCF:</label>
                <input type="text" class="form-control" id="rfc" name="rfc" onchange="validarInput(this)" onInput="aMayusculas(this.value,this.id)" minlength="12" maxlength="13" required/>
              </div>
              <div class="col">
                <label>Régimen fiscal:</label>
                <select class="form-control" name="taxregime" required/>
                  <option>Fisica</option>
                  <option>Moral</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label>Télefono de oficina:</label>
                <input type="text" class="form-control" name="phoneofficet" required/>
              </div>
              <div class="col">
                <label>Extención:</label>
                <input type="text" class="form-control" name="extensiont">
              </div>
              <div class="col">
                <label>Celular:</label>
                <input type="text" class="form-control" name="cellphonet">
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label>Email:</label>
                <input type="text" class="form-control" name="emailt" required/>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label>Calle:</label>
                <input type="text" class="form-control" name="streett" required/>
              </div>
              <div class="col">
                <label>Número interior:</label>
                <input type="text" class="form-control" name="numintt">
              </div>
              <div class="col">
                <label>Número exterior:</label>
                <input type="text" class="form-control" name="numextt" required/>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label>Colonia:</label>
                <input type="text" class="form-control" name="colonyt" required/>
              </div>
              <div class="col">
                <label>Municipio:</label>
                <input type="text" class="form-control" name="cityt" required/>
              </div>
              <div class="col">
                <label>Estado:</label>
                <input type="text" class="form-control" name="estatet" required/>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label>Pais:</label>
                <input type="text" class="form-control" name="contryt" required/>
              </div>
              <div class="col">
                <label>Cóigo postal:</label>
                <input type="text" class="form-control" name="postalcodet" required/>
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
