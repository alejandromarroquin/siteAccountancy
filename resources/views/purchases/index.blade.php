@extends('layouts.app')

@section('styles')
  <link href="{{asset('table/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet">
  <link href="{{asset('table/css/table.css')}}" rel="stylesheet">
  <link href="{{asset('table/css/table_purchases.css')}}" rel="stylesheet">
@endsection

@section('content')
<div id="page-wrapper" class="p-4">
  <div class="row mt-4" style="margin-left:20rem;">
    <div class="card-body">
      <div class="row">
        <div class="col-lg-12 col-xl-12">
          <h1 class="page-header">Solicitudes de compras</h1>
        </div>
      </div>
      <div class="col-lg-8 col-xl-12">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link pendientes active" id="pendientes-tab" data-toggle="tab" href="#pendientes" role="tab" aria-controls="pendientes" aria-selected="true">Pendientes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link historial" id="historial-tab" data-toggle="tab" href="#historial" role="tab" aria-controls="historial" aria-selected="false">Historial</a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="pendientes" role="tabpanel" aria-labelledby="pendientes-tab">
            <div class="table100 ver1 m-b-110">
              <div class="table100-head">
                <table>
                  <thead>
                    <tr class="row100 head">
                      <th class="cell100 column1">Fecha</th>
                      <th class="cell100 column2">Concepto</th>
                      <th class="cell100 column3">Subtotal</th>
                      <th class="cell100 column4">Iva</th>
                      <th class="cell100 column5">Total</th>
                      <th class="cell100 column6" colspan="2">Validar</th>
                    </tr>
                  </thead>
                </table>
              </div>
              <div class="table100-body js-pscroll">
                <table>
                  <tbody>
                    @foreach($status0 as $purchase)
                      <tr class="row100 body">
                        <td class="cell100 column1">{{$purchase->date}}</td>
                        <td class="cell100 column2">{{$purchase->concept}}</td>
                        <td class="cell100 column3">{{$purchase->subtotal}}</td>
                        <td class="cell100 column4">{{$purchase->iva}}</td>
                        <td class="cell100 column5">{{$purchase->total}}</td>
                        <td class="cell100 column6"><button class="btn btn-success Ok" value="{{$purchase->id}}">Aprobar</button></td>
                        <td class="cell100 column6"><button class="btn btn-danger noOk" value="{{$purchase->id}}">Rechazar</button></td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="historial" role="tabpanel" aria-labelledby="historial-tab">
            <div class="table100 ver1 m-b-110">
              <div class="table100-head">
                <table>
                  <thead>
                    <tr class="row100 head">
                      <th class="cell100 column1">Fecha</th>
                      <th class="cell100 column2">Concepto</th>
                      <th class="cell100 column3">Subtotal</th>
                      <th class="cell100 column4">Iva</th>
                      <th class="cell100 column5">Total</th>
                      <th class="cell100 column6" colspan="2">Estado</th>
                    </tr>
                  </thead>
                </table>
              </div>
              <div class="table100-body js-pscroll">
                <table>
                  <tbody id="tbodyh">
                    <tr class="row100 body rowshistorial">

                    </tr>
                  </tbody>
                </table>
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

@section('scripts')
  <script src="{{ asset('js/view_purchaserequests.js') }}"></script>
@endsection
