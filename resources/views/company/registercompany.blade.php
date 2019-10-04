@extends('layouts.app')

@section('content')
<div class="container" id="content" style="background-color:#F6F6F6;">


  <div id="page-wrapper" class="p-4">

      <div class="card-body">
        <div class="row">
            <div class="col-lg-12 col-xl-12">
              <h1 class="page-header">Registrar Empresa</h1>
            </div>
          </div>
      <div class="row">
        <div class="col-lg-8 col-xl-12">
          <form action="" method="POST">
            <div class="card-header">{{ __('Datos fiscales') }}</div>
            <div class="row">
              <div class="col">
                <label>Razón social:</label>
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label>RCF:</label>
                <input type="text" class="form-control">
              </div>
              <div class="col">
                <label>Régimen fiscal:</label>
                <select class="form-control">
                  <option>Fisica</option>
                  <option>Moral</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label>Télefono de oficina:</label>
                <input type="text" class="form-control" name="phoneofficet">
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
                <label>Calle:</label>
                <input type="text" class="form-control" name="streett">
              </div>
              <div class="col">
                <label>Número interior:</label>
                <input type="text" class="form-control" name="numintt">
              </div>
              <div class="col">
                <label>Número exterior:</label>
                <input type="text" class="form-control" name="numextt">
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label>Colonia:</label>
                <input type="text" class="form-control" name="colonyt">
              </div>
              <div class="col">
                <label>Municipio:</label>
                <input type="text" class="form-control" name="cityt">
              </div>
              <div class="col">
                <label>Estado:</label>
                <input type="text" class="form-control" name="estatet">
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label>Pais:</label>
                <input type="text" class="form-control" name="contryt">
              </div>
              <div class="col">
                <label>Cóigo postal:</label>
                <input type="text" class="form-control" name="postalcodet">
              </div>
            </div>
            <div class="card-header">{{ __('Datos generales') }}</div>
            <div class="card" style="width: 17rem; margin-top:2em;">
              <div class="col">
              <label class="col-form-label-sm"><strong>Utilizar datos fiscales: </strong></label>
              <label class="switch float-right">
              <input class="publish0" name="checkcomplete" type="checkbox" onclick="completeGeneralInformation();">
              <span class="slider round"></span>
            </label>
            </div>
            </div>

            <div id="generalinf">
            <div class="row">
              <div class="col">
                <label>Télefono de oficina:</label>
                <input type="text" class="form-control" id="phoneffice">
              </div>
              <div class="col">
                <label>Extención:</label>
                <input type="text" class="form-control" id="extension">
              </div>
              <div class="col">
                <label>Celular:</label>
                <input type="text" class="form-control" id="cellphone">
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label>Calle:</label>
                <input type="text" class="form-control" id="street">
              </div>
              <div class="col">
                <label>Número interior:</label>
                <input type="text" class="form-control" id="numint">
              </div>
              <div class="col">
                <label>Número exterior:</label>
                <input type="text" class="form-control" id="numext">
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label>Colonia:</label>
                <input type="text" class="form-control"  id="colony">
              </div>
              <div class="col">
                <label>Municipio:</label>
                <input type="text" class="form-control" id="city">
              </div>
              <div class="col">
                <label>Estado:</label>
                <input type="text" class="form-control" id="estate">
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label>Pais:</label>
                <input type="text" class="form-control" id="country">
              </div>
              <div class="col">
                <label>Cóigo postal:</label>
                <input type="text" class="form-control" id="postalcode">
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label>Referencia:</label>
                <textarea class="form-control" id="reference"></textarea>
              </div>
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