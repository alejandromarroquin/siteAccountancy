@extends('layouts.app')

@section('content')
<div id="page-wrapper" class="p-4">
  <div class="row mt-4" style="margin-left:20rem;">
    <div class="card-body">
      <div class="row">
        <div class="col-lg-12 col-xl-12">
          <h1 class="page-header">Actualizar Cliente</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 col-xl-12">
          <form action="" method="" role="form" id="companyform">
            {{ csrf_field() }}
            <input type="text" name="contactid" value="{{$contactid}}" hidden>
            <input type="text" name="taxid" value="{{$taxid}}" hidden>
            <input type="text" name="emailid" value="{{$emailid}}" hidden>
            <input type="text" name="addressid" value="{{$addressid}}" hidden>
            <input type="text" name="phoneid" value="{{$phoneid}}" hidden>
            <div class="row">
              <div class="col">
                <label>Nombre del responsable:</label>
                <input type="text" class="form-control" name="responsible" id="responsible" value="{{$responsible}}" required/>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label>Puesto del responsable:</label>
                <input type="text" class="form-control" name="positionresponsible" id="positionresponsible" value="{{$positionresponsible}}" required/>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label>Razón social:< <label class="required">*</label>/label>
                <input type="text" class="form-control" name="businessname" value="{{$businessName}}" placeholder="Ej. Empresa S.A. DE C.V." required/>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label>RCF: <label class="required">*</label></label>
                <input type="text" name="rfcoriginal" value="{{$rfc}}" hidden>
                <input type="text" class="form-control" id="rfc" name="rfc" value="{{$rfc}}" onInput="aMayusculas(this.value,this.id)" minlength="12" maxlength="13" required/>
              </div>
              <div class="col">
                <label>Régimen fiscal:</label>
                <input type="text" name="taxr" id="taxr" hidden>
                <select class="form-control" name="taxregime" id="taxregime" required/>
                  <option value="{{$taxRegimecode}}" selected hidden/>{{$taxRegimedescrip}}</option>
                  @foreach($taxregimes as $taxregime)
                    <option value="{{$taxregime->id}}">{{$taxregime->description}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label>Télefono de oficina: <label class="required">*</label></label>
                <input type="text" class="form-control" id="phoneoffice" name="phoneoffice" value="{{$office}}" minlength="10" maxlength="10" placeholder="10 digitos" onkeypress="return soloNumeros(event);" required/>
              </div>
              <div class="col">
                <label>Extención:</label>
                <input type="text" class="form-control" id="extension" name="extension" value="{{$extension}}"  maxlength="6" placeholder="Máximo 6 digitos" onkeypress="return soloNumeros(event);">
              </div>
              <div class="col">
                <label>Celular:</label>
                <input type="text" class="form-control" id="cellphone" name="cellphone" value="{{$cellphone}}" minlength="10" maxlength="10" placeholder="10 digitos">
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label>Email: <label class="required">*</label></label>
                <input type="text" class="form-control" id="email" name="email" value="{{$email}}" placeholder="Ej. nombre@tuempresa.com" required/>
              </div>
              <div class="col">
                <label>Página web:</label>
                <input type="text" class="form-control" id="web" name="web" value="{{$web}}" placeholder="Ej. www.tuempresa.com">
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label>Cóigo postal: <label class="required">*</label></label>
                <input type="text" class="form-control" id="postalcode" name="postalcode" value="{{$postalCode}}" minlength="5" maxlength="5" onkeypress="return soloNumeros(event);" required/>
              </div>
              <div class="col">
                <label>Calle: <label class="required">*</label></label>
                <input type="text" class="form-control" id="street" name="street" value="{{$street}}" required/>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label>Número interior:</label>
                <input type="text" class="form-control" id="numint" name="numint" value="{{$numInt}}" maxlength="3">
              </div>
              <div class="col">
                <label>Número exterior:</label>
                <input type="text" class="form-control" id="numext" name="numext" value="{{$numExt}}" maxlength="4" required/>
              </div>
              <div class="col">
                <label>Colonia: <label class="required">*</label></label>
                <select class="form-control" name="colony" id="colony">
                  <option selected hidden>{{$colony}}</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label>Municipio: <label class="required">*</label></label>
                <input type="text" class="form-control" id="city" name="city" value="{{$city}}" readonly/>
              </div>
              <div class="col">
                <label>Estado: <label class="required">*</label></label>
                <input type="text" class="form-control" id="estate" name="estate" value="{{$street}}" readonly/>
              </div>
              <div class="col">
                <label>Pais: <label class="required">*</label></label>
                <input type="text" class="form-control" id="contry" name="contry" value="{{$country}}" readonly/>
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
  <script src="{{ asset('js/view_registercompany.js') }}"></script>
  <script src="{{ asset('js/view_edit_company.js')}}"></script>
@endsection
