@extends('layouts.app')

@section('styles')
  <link href="{{asset('css/config.css')}}" rel="stylesheet">
@endsection

@section('content')
<div id="page-wrapper" class="p-4">
  <div class="row mt-4" style="margin-left:20rem;">
    <div class="card-body">
      <div class="row">
        <div class="col-lg-12 col-xl-12">
          <h1 class="page-header">Configuración:</h1>
        </div>
      </div>
      <div class="row margin">
        <div class="col-lg-8 col-xl-12">
          <form action="/saveconfig" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
              <div class="col-4">
                <label>Logo:</label>
                <input type="file" name="brand">
                <img src="{{$url}}" id="imagen1_preview" width="300"/>
              </div>
            </div>
            <input class="btn btn-primary" type="submit" value="Guardar">
          </form>
          <form action="/loadcommercial" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
              <div class="col-4">
                <label>Publicidad:</label>
                <input type="file" name="commercial">
              </div>
            </div>
            <input class="btn btn-primary" type="submit" value="Guardar">
          </form>
          <form action="/loadfiles" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
              <div class="col-4">
                <label>Certificado:</label>
                <input type="file" name="cer">
                <label>Key:</label>
                <input type="file" name="key">
              </div>
            </div>
            <input class="btn btn-primary" type="submit" value="Guardar">
          </form>
          <div class="templates">
            <input type="text" name="idconfig" value="{{$idconfig}}" hidden/>
            <input type="text" name="numtemplate" value="{{$numtemp}}" hidden/>
            <label>Selecciona una plantilla para tus facturas:</label>
            <div class="row">
              <div class="col">
                <img src="img/Template1.png" width="250">
                <button type="button" class="btn btn-primary" id="template1" onclick="selectTemplate(this);">Seleccionar</button>
              </div>
              <div class="col">
                <img src="img/Template2.png" width="250">
                <button type="button" class="btn btn-primary" id="template2" onclick="selectTemplate(this);">Seleccionar</button>
              </div>
              <div class="col">
                <img src="img/Template3.png" width="250">
                <button type="button" class="btn btn-primary" id="template3" onclick="selectTemplate(this);">Seleccionar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
  <script src="{{ asset('js/view_configuration.js') }}"></script>
@endsection
