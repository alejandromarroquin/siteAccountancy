@extends('layouts.app')

@section('content')
<div class="container" id="content" style="background-color:#F6F6F6;">


  <div id="page-wrapper" class="p-4">

      <div class="card-body">
        <div class="row">
            <div class="col-lg-12 col-xl-12">
              <h1 class="page-header">Registrar Usuario</h1>
            </div>
          </div>
      <div class="row">
        <div class="col-lg-8 col-xl-12">
          <form action="" method="POST">
            <div class="row">
              <div class="col">
                <label>Empresa:</label>
                <select class="form-control">
                  <option>...</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label>Nombre:</label>
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label>Apellido paterno:</label>
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label>Apellido materno:</label>
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label>Email:</label>
                <input type="text" class="form-control">
              </div>
              <div class="col">
                <label>Password:</label>
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="card-header">{{ __('Permisos') }}</div>
            <input class="btn btn-primary" type="submit" value="Registrar">
          </form>
        </div>
      </div>
    </div>
    </div>
</div>
@endsection
