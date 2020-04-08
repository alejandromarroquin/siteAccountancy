@extends('layouts.app')

@section('styles')
  <link href="{{asset('css/view_accounts.css')}}" rel="stylesheet">

	<link href="{{asset('table/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet">
	<link href="{{asset('table/css/util.css')}}" rel="stylesheet">
	<link href="{{asset('table/css/table_users.css')}}" rel="stylesheet">
@endsection

@section('content')

    <div class="card-body">
      <div class="row">
        <div class="col-lg-12 col-xl-12">
          <h1 class="page-header">Usuarios</h1>
        </div>
      </div>
        <div class="col-lg-8 col-xl-12">
            <div class="table100 ver1 m-b-110">
              <div class="table100-head">
                <table>
                  <thead>
                    <tr class="row100 head">
                      <th class="cell100 column1">Nombre</th>
                      <th class="cell100 column2">Email</th>
                      <th class="cell100 column3">Tipo</th>
                      <th class="cell100 column4">Edit</th>
                      <th class="cell100 column5">Delete</th>
                    </tr>
                  </thead>
                </table>
              </div>
            <div class="table100-body js-pscroll">
            <table>
              <tbody id="tbody">
                @foreach($users as $user)
                  <tr class="row100 body">
                    <td class="cell100 column1">{{$user->name." "}}{{$user->lastname}}</td>
                    <td class="cell100 column2">{{$user->email}}</td>
                    <td class="cell100 column3"></td>
                    <td class="cell100 column4"><a href="/useredit/{{$user->email}}" class="btn btn-warning">Editar</a></td>
                    <td class="cell100 column5"><button type="button" class="btn btn-danger delete" value="{{$user->email}}">Eliminar</button></td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

@endsection

@section('jquery')
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
@endsection

@section('scripts')
  <script src="{{ asset('js/view_users.js') }}"></script>
@endsection
