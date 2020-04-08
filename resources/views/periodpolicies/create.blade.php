@extends('layouts.app')

@section('content')

    <div class="card-body">
      <div class="row">
        <div class="col-lg-12 col-xl-12">
          <h1 class="page-header">Pólizas de periodo</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 col-xl-12">
          <form action="" method="" id="purchaseform" role="form">
            {{ csrf_field() }}
            <div class="row">
              <div class="col-6">
                <label>Cuenta:</label>
                <select class="form-control" name="accountdebit" id="accountdebit">
                  <option selected hidden>Selecciona una cuenta...</option>
                  @foreach($accounts as $account)
                    <option value="{{$account->id}}">{{$account->accountname}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="row">
              <div class="col-6">
                <label>Número de subcuenta:</label>
                <input class="form-control" type="text" name="numsubaccount">
              </div>
            </div>
            <div class="row">
              <div class="col-6">
                <label>Nombre de subcuenta:</label>
                <input class="form-control" type="text" name="namesubaccount">
              </div>
            </div>
            <input class="btn btn-primary" type="button" value="Registrar" id="sendform">
          </form>
        </div>
      </div>
    </div>

@endsection

@section('jquery')
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
@endsection

@section('scripts')

@endsection
