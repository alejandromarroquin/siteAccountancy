@extends('layouts.app')

@section('content')
<div class="container" id="content" style="background-color:#F6F6F6;">


  <div id="page-wrapper" class="p-4">

      <div class="card-body">
        <div class="row">
            <div class="col-lg-12 col-xl-12">
              <h1 class="page-header">Asignar presupuesto general</h1>
            </div>
          </div>
      <div class="row">
        <div class="col-lg-8 col-xl-12">
          <form action="" method="POST">
            <div class="row">
              <div class="col">
                <label>Periodo:</label>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label>Fecha inicio:</label>
                <input type="date" class="form-control">
              </div>
              <div class="col">
                <label>Fecha fin:</label>
                <input type="date" class="form-control">
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label>Presupuesto:</label>
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label>Confirmar presupuesto:</label>
                <input type="text" class="form-control">
              </div>
              </div>
            </div>
            <input class="btn btn-primary" type="submit" value="Registrar">
          </form>
        </div>
      </div>
    </div>
    </div>
</div>
@endsection
