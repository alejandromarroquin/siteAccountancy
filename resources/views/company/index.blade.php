@extends('layouts.app')

@section('content')
<div class="container" id="content" style="background-color:#F6F6F6;">
  <div id="page-wrapper" class="p-4">
    <div class="card-body">
      <div class="row">
          <div class="col-lg-12 col-xl-12">
            <h1 class="page-header">Empresas</h1>
          </div>
        </div>
        <a href="/pegawai/tambah" class="btn btn-primary">Registrar empresa</a>
          <table class="table table-bordered table-hover table-striped">
            <thead>
              <tr>
                <th>Empresa</th>
                <th>Tipo</th>
                <th>OPSI</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>2</td>
                <td>1</td>
                <td>
                  <a href="#" class="btn btn-warning">Editar</a>
                  <a href="#" class="btn btn-danger">Eliminar</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
    </div>
</div>
@endsection
