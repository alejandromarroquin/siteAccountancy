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
        <form action="/cfdicreate" method="POST" role="form" id="cfdiform">
          {{ csrf_field() }}
          <div class="row">
            <div class="col-6">
              <input type="text" name="taxregime" value="@foreach($senderdata as $data){{$data->code}}@endforeach" hidden/>
              <label>Cliente:</label>
              <select class="form-control" name="customer" id="customer" required/>
                <option value="null" selected hidden>Selecciona un cliente...</option>
                @foreach($customers as $customer)
                  <option>{{$customer->businessname}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <label>Método de pago:</label>
              <select class="form-control" name="methodpayment" id="methodpayment">
                <option selected hidden>Selecciona un método de pago...</option>
                @foreach($methodspayment as $methodpayment)
                  <option value="{{$methodpayment->code}}">{{$methodpayment->description}}</option>
                @endforeach
              </select>
            </div>
            <div class="col">
              <label>Forma de pago</label>
              <select class="form-control" name="waypayment" id="waypayment">
                <option selected hidden>Selecciona una forma de pago...</option>
                @foreach($wayspayment as $waypayment)
                  <option value="{{$waypayment->id}}">{{$waypayment->description}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-2">
              <label>Moneda</label>
              <select class="form-control" name="currency">
                <option>MXN</option>
              </select>
            </div>
            <div class="col-3">
              <label>Condiciones de pago:</label>
              <select class="form-control" name="condicspay">
                <option>Contado</option>
                <option>Anticipado</option>
                <option>Aplazado</option>
              </select>
            </div>
          </div>
          <div class="col-lg-8 col-xl-12">
            <div class="row">
              <div class="col brand">
                <img class="img-fluid" src="{{$url}}" width="200">
              </div>
              <div class="col">
                <div class="col senderinfo">
                  @foreach($senderdata as $data)
                    <input type="text" name="rfcsender" value="{{$data->rfc}}" hidden/>
                    <input type="text" name="businessname" value="{{$data->businessname}}" hidden/>
                    <input type="text" name="cp" value="{{$data->postalCode}}" hidden/>
                    <input type="text" name="street" value="{{$data->street}}" hidden/>
                    <input type="text" name="numExt" value="{{$data->numExt}}" hidden/>
                    <input type="text" name="colony" value="{{$data->colony}}" hidden/>
                    <input type="text" name="city" value="{{$data->city}}" hidden/>
                    <input type="text" name="state" value="{{$data->state}}" hidden/>
                    <strong>{{$data->businessname}}</strong><br/>
                    <strong>R.F.C {{$data->rfc}}</strong><br/>
                    Domicilio: {{$data->street}} No. {{$data->numExt}}<br/>
                    Colonia: {{$data->colony}}<br/>
                    {{$data->city}}, {{$data->state}}.
                  @endforeach
                </div>
              </div>
              <div class="col expeditiondate">
                <label><strong>Fecha y hora de emisión:</strong></label><br/>
                <label name="date" id="datetype3"></label><br/>
                <label><strong>Folio / No. Factura:</strong></label>
                <div class="folio"></div>
              </div>
            </div>
            <div class="row inf">
              <div class="col customerinf">
                <label class="margin3em"><strong>Receptor:</strong></label>
                <div class="row">
                  <div class="col">
                    <label class="businessnamecustomer margin3em"></label>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <label class="rfccustomer margin3em"></label>
                    <input type="text" name="rfccust" hidden/>
                    <input type="text" name="emailcustomer" hidden>
                  </div>
                </div>
              </div>
              <div class="col satinf">
                <div class="row">
                  <div class="col datos">
                    <label>Folio Fiscal: &nbsp</label><br/>
                    <label>Certificado del CSD: &nbsp</label><br/>
                    <label>Certificado del SAT: &nbsp</label><br/>
                    <label>Fecha de Certificación: &nbsp</label><br/>
                    <label>Régimen Fiscal: &nbsp</label><br/>
                    <label>Método de Pago: &nbsp</label><label id="methodpay"></label><br/>
                    <label>Uso de CFDI: &nbsp</label><br/>
                    <label>Forma de Pago: &nbsp</label><label id="awaypay"></label><br/>
                  </div>
                </div>
              </div>
            </div>
            <div class="capa">
              <div class="container table">
                <div class="row">
                  <div class="col-2">
                    <label>Cantidad</label>
                  </div>
                  <div class="col-1">
                    <label>IVA</label>
                  </div>
                  <div class="col">
                    <label>U. Medida</label>
                  </div>
                  <div class="col">
                    <label>Cod. Producto</label>
                  </div>
                  <div class="col">
                    <label>Descripción</label>
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
                    <input class="form-control" name="quantity[]" id="quantity1" onchange="inputChange(this);setSubtotal(this);setTotal();" onkeypress="return soloNumeros(event);" required/>
                  </div>
                  <div class="col-1">
                    <input type="checkbox" name="applyiva[]" id="applyiva1" onchange="setIVA(this);setTotal();">
                  </div>
                  <div class="col">
                    <input class="form-control" type="text" name="unit[]" id="unit1" required/>
                    <a href="http://pys.sat.gob.mx/PyS/catUnidades.aspx" target="_blank" class="codesat">Consultar catálogo</a>
                  </div>
                  <div class="col">
                    <input class="form-control" name="codeproduct[]" id="codeproduct1" required/>
                    <a href="http://pys.sat.gob.mx/PyS/catPyS.aspx"  target="blank" class="codesat">Consultar catálogo</a>
                  </div>
                  <div class="col">
                    <input class="form-control" name="concept[]" id="concept1" required/>
                  </div>
                  <div class="col">
                    <input class="form-control" name="unitprice[]" id="unitprice1" onchange="inputChange(this);addDecimal(this);setSubtotal(this);setTotal();" onkeypress="return filterFloat(event,this);" required/>
                  </div>
                  <div class="col">
                    <input class="form-control" name="importe[]" id="importe1" onchange="addDecimal(this);" readonly/>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <button type="button" class="btn btn-secondary add">+</button>
                </div>
              </div>
            </div>
            <div class="row totals">
              <div class="col" style="text-align:right;">
                <div class="form-group">
                  <label>Subtotal:</label>
                  <label>
                    <input class="form-control" name="subtotal" readonly/>
                  </label>
                </div>
              </div>
            </div>
            <div class="row totals">
              <div class="col" style="text-align:right;">
                <div class="form-group">
                  <label>IVA:</label>
                  <label>
                    <input class="form-control" name="iva" readonly/>
                  </label>
                </div>
              </div>
            </div>
            <div class="row totals">
              <div class="col" style="text-align:right;">
                <div class="form-group">
                  <label>Total:</label>
                  <label>
                    <input class="form-control" name="total" readonly/>
                  </label>
                </div>
              </div>
            </div>
            <div class="row qr">
              <div class="code"></div>
              <div class="col">
                <div class="row stamp">
                  <strong>Sello Digital del CFDI</strong>
                </div>
                <div class="row stamp">
                  <strong>Sello Digital del SAT</strong>
                </div>
                <div class="row stamp">
                  <strong>Cadena original del complemento de certificación del SAT</strong>
                </div>
              </div>
            </div>
          </div>
          <input class="btn btn-primary" type="button" value="Generar factura" id="sendform">
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
  <script src="{{ asset('js/view_newcfdi.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/jquery.qrcode.min.js') }}"></script>
@endsection
