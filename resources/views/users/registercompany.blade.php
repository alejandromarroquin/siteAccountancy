@extends('layouts.app')

@section('content')
<div class="container" id="content" style="background-color:#F6F6F6;">
  <script src="{{ asset('js/view-customer/view-customer.js') }}" defer></script>

  <div id="page-wrapper" class="p-4">
    <div class="row">
        <div class="col-lg-12 col-xl-12">
          <h1 class="page-header">Registrar Empresa</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 col-xl-12">
          <form action="" method="POST">
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
                <input type="text" class="form-control">
              </div>
              <div class="col">
                <label>Extención:</label>
                <input type="text" class="form-control">
              </div>
              <div class="col">
                <label>Celular:</label>
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label>Calle:</label>
                <input type="text" class="form-control">
              </div>
              <div class="col">
                <label>Número interior:</label>
                <input type="text" class="form-control">
              </div>
              <div class="col">
                <label>Número exterior:</label>
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label>Colonia:</label>
                <input type="text" class="form-control">
              </div>
              <div class="col">
                <label>Municipio:</label>
                <input type="text" class="form-control">
              </div>
              <div class="col">
                <label>Estado:</label>
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label>Pais:</label>
                <input type="text" class="form-control">
              </div>
              <div class="col">
                <label>Cóigo postal:</label>
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label>Referencia:</label>
                <textarea class="form-control"></textarea>
              </div>
            </div>
            <input class="btn btn-primary" type="submit" value="Registrar">
          </form>
        </div>
      </div>
    </div>
</div>
@endsection
