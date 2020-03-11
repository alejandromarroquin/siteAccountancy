@extends('layouts.app')

@section('styles')
  <link href="{{ asset('css/reports.css')}}" rel="stylesheet">
@endsection

@section('content')
<div id="page-wrapper" class="p-4">
  <div class="row mt-4" style="margin-left:20rem;">
    <div class="card-body">
      <div class="row">
        <div class="col-lg-12 col-xl-12">
          <h1 class="page-header">Generar reportes contables</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 col-xl-12">
          <div class="row">
            <div class="col-2">
              <div class="div-img">
                <a class="linkreport" id="balancesheet" data-toggle="modal" data-target="#exampleModalCenter">
                  <img src="{{asset('img/icondoc1.png')}}" class="img-fluid img">
                  <label class="namereport">Balance general</label>
                </a>
              </div>
            </div>
            <div class="col-2">
              <div class="div-img">
                <a href="" class="linkreport" id="statementresult" data-toggle="modal" data-target="#exampleModalCenter">
                  <img src="{{asset('img/icondoc2.png')}}" class="img-fluid img">
                  <label class="namereport">Estado de resultados</label>
                </a>
              </div>
            </div>
            <div class="col-2">
              <div class="div-img">
                <a href="" class="linkreport" id="trialbalance" data-toggle="modal" data-target="#exampleModalCenter">
                  <img src="{{asset('img/icondoc3.png')}}" class="img-fluid img">
                  <label class="namereport">Balanza de comparobación</label>
                </a>
              </div>
            </div>
            <div class="col-2">
              <div class="div-img">
                <a href="" class="linkreport" id="cashflow" data-toggle="modal" data-target="#exampleModalCenter">
                  <img src="{{asset('img/icondoc4.png')}}" class="img-fluid img">
                  <label class="namereport">Estado de flujo de efectivo</label>
                </a>
              </div>
            </div>
            <div class="col-2">
              <div class="div-img">
                <a href="" class="linkreport" id="periodpoliciesincome" data-toggle="modal" data-target="#exampleModalCenter">
                  <img src="{{asset('img/icondoc3.png')}}" class="img-fluid img">
                  <label class="namereport">Pólizas de ingresos</label>
                </a>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-2">
              <div class="div-img">
                <a href="" class="linkreport" id="periodpoliciesexpenses" data-toggle="modal" data-target="#exampleModalCenter">
                  <img src="{{asset('img/icondoc3.png')}}" class="img-fluid img">
                  <label class="namereport">Pólizas de egresos</label>
                </a>
              </div>
            </div>
            <div class="col-2">
              <div class="div-img">
                <a href="" class="linkreport" id="periodpoliciesdaily" data-toggle="modal" data-target="#exampleModalCenter">
                  <img src="{{asset('img/icondoc3.png')}}" class="img-fluid img">
                  <label class="namereport">Pólizas de diario</label>
                </a>
              </div>
            </div>
          </div>
          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Seleccione un periodo</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="row" id="alert">
                    <div class="alert alert-danger" role="alert">
                      La fecha de inicio no puede ser mayor a la final
                    </div>
                  </div>
                  <form action="" method="POST" role="form" id="dates">
                    {{ csrf_field() }}
                    <div class="row">
                      <div class="col">
                        <label>De:</label>
                        <input type="date" class="form-control" name="initaldate" id="inicio" name="" required/>
                      </div>
                      <div class="col">
                        <label>Hasta:</label>
                        <input type="date" class="form-control" name="finaldate" id="fin" name="" required/>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary" id="generate">Siguiente</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('jquery')
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
@endsection

@section('flaticonautor')
  <div>Icons made by <a href="https://www.flaticon.es/autores/pongsakornred" title="pongsakornRed">pongsakornRed</a> from <a href="https://www.flaticon.es/" title="Flaticon">www.flaticon.es</a></div>
  <div>Iconos diseñados por <a href="https://www.flaticon.es/autores/payungkead" title="Payungkead">Payungkead</a> from <a href="https://www.flaticon.es/" title="Flaticon">www.flaticon.es</a></div>
  <div>Icons made by <a href="https://www.flaticon.com/authors/smashicons" title="Smashicons">Smashicons</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
  <div>Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
@endsection

@section('scripts')
  <script src="{{ asset('js/view_generatereports.js') }}"></script>
@endsection
