@extends('layouts.app')

@section('styles')
  <link href="{{asset('css/config.css')}}" rel="stylesheet">
  <script type="text/javascript" src="js/jquery-1.12.0.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/editor.js"></script>
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/editor.css">
	<script type="text/javascript">
		$(document).ready(function(){
			$('#txt-content').Editor();

			$('#txt-content').Editor('setText', ['<blockquote style="margin: 0 0 0 40px; border: none; padding: 0px;"><img class="img-fluid" src="/storage/Company/DYC160316AT6/Brand/brandDYC160316AT6.png" width="200">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Fecha y hora: $</blockquote><blockquote style="margin: 0 0 0 40px; border: none; padding: 0px;"><blockquote style="margin: 0 0 0 40px; border: none; padding: 0px;"><blockquote style="margin: 0 0 0 40px; border: none; padding: 0px;"><blockquote style="margin: 0 0 0 40px; border: none; padding: 0px;"><blockquote style="margin: 0 0 0 40px; border: none; padding: 0px;"><blockquote style="margin: 0 0 0 40px; border: none; padding: 0px;"><blockquote style="margin: 0 0 0 40px; border: none; padding: 0px;"><blockquote style="margin: 0 0 0 40px; border: none; padding: 0px;"><blockquote style="margin: 0 0 0 40px; border: none; padding: 0px;"><blockquote style="margin: 0 0 0 40px; border: none; padding: 0px;"><blockquote style="margin: 0 0 0 40px; border: none; padding: 0px;"><blockquote style="margin: 0 0 0 40px; border: none; padding: 0px;"><blockquote style="margin: 0 0 0 40px; border: none; padding: 0px;">&nbsp; No. Factura: $</blockquote></blockquote></blockquote></blockquote></blockquote></blockquote></blockquote></blockquote></blockquote></blockquote></blockquote></blockquote></blockquote><table class="table" align="center" border="0" cellspacing="1" cellpadding="1" style="width: 600px;"><tbody><tr><td>&nbsp;Emisor:<br><br></td><td>&nbsp;Cliente:<br><br></td></tr></tbody></table><table class="table" border="1" cellspacing="1" cellpadding="1" style="width: 600px;" align=""><tbody><tr><td>&nbsp;Cve Prod.</td><td>&nbsp;Cantidad</td><td>&nbsp;Unidad</td><td>&nbsp;Descripción</td><td>&nbsp;Precio unit.</td><td>&nbsp;Importe</td></tr></tbody></table><hr id="null"><blockquote style="margin: 0 0 0 40px; border: none; padding: 0px;"><blockquote style="margin: 0 0 0 40px; border: none; padding: 0px;"></blockquote></blockquote>']);

			$('#btn-enviar').click(function(e){
				e.preventDefault();
				$('#txt-content').text($('#txt-content').Editor('getText'));
				$('#frm-test').submit();
			});
		});
	</script>
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
          <div class="row">
      			<div class="col-sm-8">

      					<div class="form-group">
      						<textarea id="txt-content" name="txt-content"></textarea>
      					</div>
      					<input type="button" class="btn btn-primary" id="btn-enviar" value="Mostrar Resultado">

      			</div>
      		</div>
          <div class="col-lg-12 col-xl-12">
            <h1 class="page-header">Personalizar plantilla:</h1>
          </div>
          <div class="row">
            <div class="col-sm-10">
              <div class="elements" id="elements" style="  width: 100%; height: 30%; border: 1px solid black;">
                <div class="row">
                  <div class="col">
                    <div id="brand" draggable="true" style="  width:100%;">
                      <img class="img-fluid" src="{{Storage::disk('local')->url('Company/'.session('rfc').'/Brand/'.'brand'.session('rfc').'.png')}}" width="200" style="margin-left: auto;margin-right: auto;display: block;margin-top:1em;">
                    </div>
                  </div>
                  <div class="col">
                    <div class="senderinfo" id="senderinfo" draggable="true" style="  width:100%;">

                        <input type="text" name="rfcsender" value="" hidden/>
                        <input type="text" name="businessname" value="" hidden/>
                        <input type="text" name="cp" value="" hidden/>
                        <input type="text" name="street" value="" hidden/>
                        <input type="text" name="numExt" value="" hidden/>
                        <input type="text" name="colony" value="" hidden/>
                        <input type="text" name="city" value="" hidden/>
                        <input type="text" name="state" value="" hidden/>
                        <strong></strong><br/>
                        <strong>R.F.C </strong><br/>
                        Domicilio:  No. <br/>
                        Colonia:<br/>
                        , .

                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <div class="table" id="table" draggable="true" style="  width:100%;">
                      <table style="margin-left:auto;margin-right:auto;">
                        <tr>
                          <th class="cod">Cve Prod Serv</th>
                          <th class="cant">Cant.</th>
                          <th class="unit">Unidad</th>
                          <th class="descript">Descripción</th>
                          <th class="price">Precio Unitario</th>
                          <th class="imp">Importe</th>
                        </tr>
                        <tr>
                          <td class="cod">---</td>
                          <td class="cant">---</td>
                          <td class="unit">---</td>
                          <td class="descript">---</td>
                          <td class="price">---</td>
                          <td class="imp">---</td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <div class="commercial" id="commercial" draggable="true" style="width: 800px;height: 150px;border: 1px solid black;text-align: center;font-family: Arial;font-size: 40px;color: gray;">
                      <img src="">
                    </div>
                  </div>
                </div>
              </div>

              <div class="estructura" style="  margin-top: 3em;border: 1px solid black;width: 100%;height:700px;">
                <div id="section1" style="  border: 1px solid black;width:50%;min-height:200px;float:left;">

                </div>
                <div id="section2" style="  border: 1px solid black;width:50%;min-height:200px;float:right;">

                </div>
                <div id="section3" style="  border: 1px solid black;width:100%;min-height:200px;margin-top:14em;">

                </div>
                <div id="section4" style="  border: 1px solid black;width:100%;min-height:200px;">

                </div>
              </div>

      		    <input type="button" class="btn btn-primary" id="btn-obtenerhtml" value="Mostrar Resultado">
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
