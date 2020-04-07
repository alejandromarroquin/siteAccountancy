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
          <form action="" method="" role="form" id="userform">
            {{ csrf_field() }}
            <div class="row">
              <div class="col">
                <input name="idcompany" value="{{$idcompany}}" hidden/>
                <input name="iduser" value="{{$iduser}}" hidden/>
                <label>Empresa: <label class="required">*</label></label>
                <select class="form-control" name="company" id="company" readonly>
                  <option selected>{{$company}}</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label>Nombre: <label class="required">*</label></label>
                <input type="text" class="form-control" id="name" name="name" value="{{$name}}" onkeypress="return soloLetras(event);" required/>
              </div>
              <div class="col">
                <label>Apellido: <label class="required">*</label></label>
                <input type="text" class="form-control" id="lastname" name="lastname" value="{{$lastname}}" onkeypress="return soloLetras(event);" required/>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label>Correo: <label class="required">*</label></label>
                <input type="email" class="form-control" id="email" name="email" value="{{$email}}" required/>
              </div>
              <div class="col">
                <label>Nueva Contrseña: <label class="required">*</label></label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Ingresa una nueva contraseña"/>
              </div>
            </div>
            <input class="btn btn-primary" type="button" value="Actualizar" id="updateform">
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
  <script src="{{ asset('js/view_edit_user.js')}}"></script>
@endsection
