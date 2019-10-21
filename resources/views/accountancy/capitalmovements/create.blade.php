@extends('layouts.app')

@section('content')
<div id="page-wrapper" class="p-4">
  <div class="row mt-4" style="margin-left:20rem;">
    <div class="card-body">
      <div class="row">
        <div class="col-lg-12 col-xl-12">
          <h1 class="page-header">Movimientos de capital</h1>
        </div>
      </div>
        <div class="col-lg-8 col-xl-12">
          <form action="movementscreate" method="POST" role="form">
            {{ csrf_field() }}
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Venta</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Gastos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Nóminas</a>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="row">
                  <div class="col">
                    <label>RCF:</label>
                    <input type="text" class="form-control" id="rfc" name="rfc" onchange="validarInput(this)" onInput="aMayusculas(this.value,this.id)" minlength="12" maxlength="13" required/>
                  </div>
                  <div class="col">
                    <label>Venta:</label>
                    <select class="form-control" name="taxregime" required/>
                      <option>Fisica</option>
                      <option>Moral</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="row">
                  <div class="col">
                    <label>Concepto:</label>
                    <input type="text" class="form-control" id="rfc" name="rfc" onchange="validarInput(this)" onInput="aMayusculas(this.value,this.id)" minlength="12" maxlength="13" required/>
                  </div>
                  <div class="col">
                    <label>Cantidad:</label>
                    <select class="form-control" name="taxregime" required/>
                      <option>Fisica</option>
                      <option>Moral</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
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
              </div>
            </div>
            <input class="btn btn-primary" type="submit" value="Registrar">
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
