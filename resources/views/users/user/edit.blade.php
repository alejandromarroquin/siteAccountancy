@extends('layouts.app')

@section('content')
<div id="page-wrapper" class="p-4">
  <div class="row mt-4" style="margin-left:20rem;">
    <div class="card-body">
      <div class="row">
        <div class="col-lg-12 col-xl-12">
          <h1 class="page-header">Actualizar Usuario</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 col-xl-12">
          <form action="/userupdate" method="POST" role="form">
            {{ csrf_field() }}
            <div class="row">
              <div class="col">
                <input name="idcompany" value="{{$idcompany}}" hidden/>
                <input name="iduser" value="{{$iduser}}" hidden/>
                <label>Empresa:</label>
                <select class="form-control" name="company" id="company" readonly>
                  <option selected>{{$company}}</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label>Nombre:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$name}}" onkeypress="return soloLetras(event);" required/>
              </div>
              <div class="col">
                <label>Apellido:</label>
                <input type="text" class="form-control" id="lastname" name="lastname" value="{{$lastname}}" onkeypress="return soloLetras(event);" required/>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label>Correo:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{$email}}" required/>
              </div>
              <div class="col">
                <label>Nueva Contrseña:</label>
                <input type="text" class="form-control" id="password" name="password" placeholder="Ingresa una nueva contraseña"/>
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
