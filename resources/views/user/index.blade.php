@extends('layouts.app')

@section('content')
<div id="page-wrapper" class="p-4">
  <div class="row">
      <div class="col-lg-12 col-xl-12">
        <h1 class="page-header">Clientes</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8 col-xl-12">
        <div class="card">
          <div class="card-body">
            <div class="modal-footer">
              <a class="btn btn-info" id="btnAgregarCliente" data-toggle="modal" data-target="#agregarClienteModal"style="color: white;">
                <i class="fa fa-plus"></i>
                Cliente
              </a>
              <!-- @include('customers.create') -->
            </div>

            <!-- @include('messages') -->

            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
              <thead>
                <tr>
                  <th><center>Clave del Cliente</center></th>
                  <th>Nombre</th>
                  <th>Deuda Actual</th>
                  <th>E-mail</th>
                  <th>Razón Social</th>
                  <th>RFC</th>
                  <th>Tipo de Régimen</th>
                  <th>Régimen</th>
                  <th>Direcciones</th>
                  <th>Ventas</th>
                  <th>Editar</th>
                  <th>Eliminar</th>
                </tr>
              </thead>
              <tbody>
                <!-- @if(count($customers)>0)
                  @foreach($customers as $customer) -->
                    <tr>
                      <!-- <td><center>{{$customer->id}}</center></td>
                      <td>{{$customer->name}} {{$customer->lastName}} {{$customer->mothersSurname}}</td>
                      <td><center>${{$customer->actualDebt}}</center></td>
                      <td>{{$customer->email}}</td>
                      <td>{{$customer->company_name}}</td>
                      <td>{{$customer->RFC}}</td>
                      <td>{{$customer->regime_type}}</td>
                      <td>{{$customer->regime}}</td> -->
                      <!-- Modal de direcciones del cliente -->
                      <td>
                        <center>
                        <a class="btn btn-info" data-toggle="modal" data-target="#direccionesClienteModal{{$customer->id}}" onclick="loadUpdateData({{$customer->id}},'{{$customer->regime_type}}','{{$customer->regime}}');">
                          <i class="fa fa-bookmark" style="color: white;"></i>
                        </a></center>
                      </td>
                      <!-- @if(count($customer->address)>0)
                        @include('customers.addresses.index')
                      @else
                        @include('customers.addresses.create')
                      @endif -->

                      <!-- Redirección a página de histórico de ventas -->
                      <td>
                        <center>

                        <a class="btn btn-success" href="historySales/{{$customer->id}}">
                          <i class="fa fa-calendar" style="color: white;"></i>
                        </a></center>
                      </td>

                      <!-- Modal de actualización del cliente -->
                      <td>
                        <a class="btn btn-warning" data-toggle="modal" data-target="#modificarClienteModal{{$customer->id}}" onclick="loadUpdateData({{$customer->id}},'{{$customer->regime_type}}','{{$customer->regime}}'); ">
                          <i class="	fa fa-pencil-square-o" style="color: white;"></i>
                        </a>
                      </td>

                      <!-- @include('customers.update') -->

                      <!--Fin modal actualización-->
                      <td>
                        <form action="{{ Route('customers.destroy',['id'=>$customer->id]) }}" method="post">
                          <!-- {{ method_field('delete') }}
                          {{ csrf_field() }} -->
                          <button type="submit" class="btn btn-danger">
                            <i class="fa fa-trash"></i>
                          </button>
                        </form>
                      </td>

                          <!-- @if(count($customer->address)>0)
                            @include('customers.addresses.index')
                          @else
                            @include('customers.addresses.create')
                          @endif -->
                    </tr>

                  <!-- @endforeach
                @else -->
                  <div class="alert alert-dark" role="alert">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    No existen clientes registrados
                  </div>
                    <!-- @endif -->
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
