@extends('layouts.app')

@section('styles')
  <link href="{{asset('css/periodpolicies.css')}}" rel="stylesheet">
@endsection

@section('content')
<div id="page-wrapper" class="p-4">
  <div class="row mt-4" style="margin-left:20rem;">
    <div class="card-body">
      <div class="row">
        <div class="col">
          <h1 class="page-header">Póliza de Diario</h1>
        </div>
        <form action="/downloadpoliciedaily" method="GET">
          <div class="col">
            <button type="submit" class="btn btn-primary" id="download">Descargar</button>
            <input type="text" name="datetoday" hidden>
          </div>
        </form>
      </div>
      <div class="row margin">
        <div class="col-lg-8 col-xl-12">
          <div class="container information">
            @foreach($company as $information)
              <label>{{$information->businessName}}</label><br/>
            @endforeach
            <label>Estado de resultados al</label>
            <label id="date"></label>
          </div>
          <table>
            <tr>
              <th>Cuenta</th>
              <th>Subcuenta</th>
              <th>Nombre</th>
              <th>Parcial</th>
              <th>Debe</th>
              <th>Haber</th>
            </tr>
            @foreach($policiesdeb as $policie)
              @if(array_key_exists($policie->namesubaccount,$policiesperioddeb) && $policie->namesubaccount!=$subaccountname)
                <label hidden>{{$subaccountname=$policie->namesubaccount}}</label>
                <tr>
                  <td>{{$policie->code}}</td>
                  <td></td>
                  <td>{{$policie->accountName}}</td>
                  <td></td>
                  <td></td>
                  <td>{{$arraysumdebs[$policie->accountName]}}</td>
                </tr>
              @endif
              <tr>
                <td></td>
                <td>{{$policie->idsubaccount}}</td>
                <td>{{$policie->namesubaccount}}</td>
                <td>{{$policie->amount}}</td>
                <td></td>
                <td></td>
              </tr>
            @endforeach
            <tr>
              <td>' '</td>
              <td>' '</td>
              <td>' '</td>
              <td>' '</td>
              <td>' '</td>
              <td>' '</td>
            </tr>
            @foreach($policiescred as $policie)
              @if(array_key_exists($policie->namesubaccount,$policiesperiodcred) && $policie->namesubaccount!=$accountname)
              <label hidden>{{$accountname=$policie->namesubaccount}}</label>
                <tr>
                  <td>{{$policie->code}}</td>
                  <td></td>
                  <td>{{$policie->accountName}}</td>
                  <td></td>
                  <td>{{$arraysumcreds[$policie->accountName]}}</td>
                  <td></td>
                </tr>
              @endif
              <label hidden>{{$sum=$sum+$policie->amount}}</label>
                <tr>
                  <td></td>
                  <td>{{$policie->idsubaccount}}</td>
                  <td>{{$policie->namesubaccount}}</td>
                  <td>{{$policie->amount}}</td>
                  <td></td>
                  <td></td>
                </tr>
            @endforeach
            <tr>
              <td>' </td>
              <td>' </td>
              <td>' </td>
              <td>' </td>
              <td>' </td>
              <td>' </td>
            </tr>
            <tr>
              <td>' </td>
              <td>' </td>
              <td>' </td>
              <td>' </td>
              <td>' </td>
              <td>' </td>
            </tr>
            <tr>
              <td>' </td>
              <td>' </td>
              <td>' </td>
              <td>Sumas iguales</td>
              <td>' </td>
              <td>' </td>
            </tr>
            <tr>
              <td colspan="6">Concepto</td>
            </tr>
            <tr>
              <td colspan="6">.</td>
            </tr>
            <tr>
              <td rowspan="2">Control</td>
              <td>Hecho por</td>
              <td>Revisado por</td>
              <td>Autorizado</td>
              <td>Auxiliares</td>
              <td>Diario</td>
            </tr>
            <tr>
              <td>.</td>
              <td>.</td>
              <td>.</td>
              <td>.</td>
              <td>.</td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>Fecha</td>
              <td>Póliza No.</td>
            </tr>
          </table>
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
  <script src="{{ asset('js/statementresult.js') }}"></script>
@endsection
