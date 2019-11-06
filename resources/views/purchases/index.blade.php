@extends('layouts.app')

@section('styles')
  <link rel="stylesheet" type="text/css" href="table/vendor/perfect-scrollbar/perfect-scrollbar.css">
  <link rel="stylesheet" type="text/css" href="table/css/table.css">
  <link rel="stylesheet" type="text/css" href="table/css/table_purchases.css">
@endsection

@section('content')
<div id="page-wrapper" class="p-4">
  <div class="row mt-4" style="margin-left:20rem;">
    <div class="card-body">
      <div class="row">
        <div class="col-lg-12 col-xl-12">
          <h1 class="page-header">Solicitudes de compra</h1>
        </div>
      </div>
      <div class="col-lg-8 col-xl-12">
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
                  <th class="cell100 column6">Validar</th>
                </tr>
              </thead>
            </table>
          </div>
          <div class="table100-body js-pscroll">
            <table>
              <tbody id="tbody">
                @foreach($purchases as $purchase)
                  <tr class="row100 body">
                    <td class="cell100 column1">{{$purchase->date}}</td>
                    <td class="cell100 column2">{{$purchase->concept}}</td>
                    <td class="cell100 column3">{{$purchase->subtotal}}</td>
                    <td class="cell100 column4">{{$purchase->iva}}</td>
                    <td class="cell100 column5">{{$purchase->total}}</td>
                    <td class="cell100 column5"><button class="btn btn-success Ok" value="{{$purchase->id}}">Aprobar</button><button class="btn btn-danger noOk" value="{{$purchase->id}}">Rechazar</button></td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
  <script src="{{ asset('js/view_purchaserequests.js') }}"></script>
@endsection
