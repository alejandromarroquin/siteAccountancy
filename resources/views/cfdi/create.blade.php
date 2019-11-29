@extends('layouts.app')

@section('styles')
  <link href="{{asset('css/newcfdi.css')}}" rel="stylesheet">
@endsection

@section('content')
<div id="page-wrapper" class="p-4">
  <div class="row mt-4" style="margin-left:20rem;">
    <div class="card-body">
      <div class="row">
        <div class="col-lg-12 col-xl-12">
          <h1 class="page-header">Facturación</h1>
        </div>
      </div>
      <div class="row margin">
        <form action="/cfdicreate" method="POST" role="form">
          {{ csrf_field() }}
          <div class="col-lg-8 col-xl-12">
            <div class="row">
              <div class="col-3">
                <img class="img-fluid" src="{{asset('img/logoempresa.png')}}">
              </div>
              <div class="col-3 expeditiondate">
                <label>Fecha y hora de emisión:</label>
                <input type="text" class="form-control" name="date" value="{{$expeditiondate}}" readonly required/>
              </div>
            </div>
            <div class="capa">
              <div class="container table">
                <div class="row">
                  <div class="col-2">
                    <label>Cantidad</label>
                  </div>
                  <div class="col">
                    <label>Unidad de medida</label>
                  </div>
                  <div class="col">
                    <label>Concepto</label>
                  </div>
                  <div class="col">
                    <label>Precio unitario</label>
                  </div>
                  <div class="col">
                    <label>Importe</label>
                  </div>
                </div>
                <div class="row" id="inputs">
                  <input type="text" name="cont" value="2" id="cont" hidden/>
                  <div class="col-2">
                    <input class="form-control" name="quantity[]" id="quantity1" onchange="inputChange(this);" onkeypress="return soloNumeros(event);" required/>
                  </div>
                  <div class="col">
                    <select class="form-control" name="unit[]" id="unit1" required/>
                      <option selected hidden>Selecciona unidad...</option>
                      @foreach($units as $unit)
                        <option>{{$unit->description}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="col">
                    <input class="form-control" name="concept[]" id="concept1" required/>
                  </div>
                  <div class="col">
                    <input class="form-control" name="unitprice[]" id="unitprice1" onchange="inputChange(this);addDecimal(this);" onkeypress="return filterFloat(event,this);" required/>
                  </div>
                  <div class="col">
                    <input class="form-control" name="importe[]" id="importe1" onchange="addDecimal(this);" readonly required/>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <button type="button" class="btn btn-secondary add">+</button>
                </div>
              </div>
            </div>
          </div>
          <input class="btn btn-primary" type="submit" value="Generar factura">
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
  <script src="{{ asset('js/view_newcfdi.js') }}"></script>
@endsection
