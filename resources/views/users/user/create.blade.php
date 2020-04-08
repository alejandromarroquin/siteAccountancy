@extends('layouts.app')

@section('content')

    <div class="card-body">
      <div class="row">
        <div class="col-lg-12 col-xl-12">
          <h1 class="page-header">Registrar Usuario</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 col-xl-12">
          <form action="" method="" role="form" id="userform">
            {{ csrf_field() }}
            @if(auth()->user()->idCompany==1)
              <div class="row">
                <div class="col">
                  <label>Empresa: <label class="required">*</label></label>
                  <select class="form-control" name="company" id="company" required/>
                    <option selected hidden>Selecciona una empresa...</option>
                    <option value="1">D&C Tech Development and Consulting S.A. de C.V.</option>
                    @foreach($businessnames as $businessname)
                        <option value="{{$businessname->idCompany}}">{{$businessname->businessname}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            @endif
            <div class="row">
              <div class="col">
                <label>Nombre: <label class="required">*</label></label>
                <input type="text" class="form-control" id="name" name="name" onkeypress="return soloLetras(event);" required/>
              </div>
              <div class="col">
                <label>Apellido: <label class="required">*</label></label>
                <input type="text" class="form-control" id="lastname" name="lastname" onkeypress="return soloLetras(event);" required/>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label>Correo: <label class="required">*</label></label>
                <input type="email" class="form-control" id="email" name="email" required/>
              </div>
              <div class="col">
                <label>Contraseña: <label class="required">*</label></label>
                <input type="password" class="form-control" id="password" name="password" required/>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label>Tipo de usuario:</label>
                <select class="form-control" name="typeuser">
                  <option selected hidden>Selecciona uno...</option>
                  <option value="2">Administrador</option>
                  <option value="3">Contador</option>
                  <option value="4">Subcontador</option>
                  <option value="5">Asistente</option>
                </select>
              </div>
            </div>
            <input class="btn btn-primary" type="button" value="Registrar" id="sendform">
          </form>
        </div>
      </div>
    </div>

@endsection

@section('jquery')
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
@endsection

@section('scripts')
  <script src="{{ asset('js/view_registeruser.js') }}"></script>
@endsection
