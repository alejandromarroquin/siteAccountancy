@extends('layouts.app')

@section('styles')
  <link href="{{ asset('css/view_accounts.css')}}" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="table/vendor/perfect-scrollbar/perfect-scrollbar.css">
	<link rel="stylesheet" type="text/css" href="table/css/table.css">
	<link rel="stylesheet" type="text/css" href="table/css/table_companies.css">
@endsection

@section('content')
<div id="page-wrapper" class="p-4">
  <div class="row mt-4" style="margin-left:20rem;">
    <div class="card-body">
      <div class="row">
        <div class="col-lg-12 col-xl-12">
          <h1 class="page-header">Empresas</h1>
        </div>
      </div>
        <div class="col-lg-8 col-xl-12">
            <div class="table100 ver1 m-b-110">
              <div class="table100-head">
                <table>
                  <thead>
                    <tr class="row100 head">
                      <th class="cell100 column1">RFC</th>
                      <th class="cell100 column2">Razón social</th>
                      <th class="cell100 column3">Email</th>
                      <th class="cell100 column4">Teléfono</th>
                      <th class="cell100 column5">Edit</th>
                      <th class="cell100 column6">Delete</th>
                    </tr>
                  </thead>
                </table>
              </div>
            <div class="table100-body js-pscroll">
            <table>
              <tbody id="tbody">
                @foreach($companies as $companie)
                  <tr class="row100 body">
                    <td class="cell100 column1">{{$companie->rfc}}</td>
                    <td class="cell100 column2">{{$companie->businessName}}</td>
                    <td class="cell100 column3">{{$companie->email}}</td>
                    <td class="cell100 column4">{{$companie->office}}</td>
                    <td class="cell100 column5"><a href="/empresaedit/{{$companie->rfc}}" class="btn btn-warning">Editar</a></td>
                    <td class="cell100 column6"><button type="button" class="btn btn-danger delete" value="{{$companie->rfc}}">Eliminar</button></td>
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
<script src="{{ asset('js/view_accounts.js') }}"></script>
<script src="{{ asset('js/view_companies.js') }}"></script>

<!--===============================================================================================-->
<script src="table/js/main.js"></script>
  <script src="{{ asset('js/view_registercompany.js') }}"></script>
@endsection
