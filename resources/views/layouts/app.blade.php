<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Contabilidad</title>

    <!-- icon -->
    <link rel="icon" type="image/png" href="img/icon.png" />

    <!-- Fonts -->
    <link href="{{ asset('vendor/font-awesome/fonts/familyNunito.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('vendor/metisMenu/metisMenu.min.css')}}" rel="stylesheet">
    <link href="{{ asset('dist/css/sb-admin-2.css')}}" rel="stylesheet">
    <link href="{{ asset('dist/css/validate.css')}}" rel="stylesheet"><!-- CSS para validación con JQuery -->
    <link href="{{ asset('vendor/morrisjs/morris.css')}}" rel="stylesheet">
    <link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('dist/css/select2.css')}}" rel="stylesheet">
    <link href="{{ asset('vendor/datatables/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
    <link href="{{ asset('css/nv-sb.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('vendor/datatables-responsive/dataTables.responsive.css')}}">
    <link href="{{ asset('css/content.css')}}" rel="stylesheet">
    <link href="{{ asset('css/layout.css')}}" rel="stylesheet">
    @yield('styles')

</head>
<body>
  <header>
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
          <div class="container">
              <a class="navbar-brand" href="{{ url('/') }}">
                  Contabilidad
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                  <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <!-- Left Side Of Navbar -->
                  <ul class="navbar-nav mr-auto">

                  </ul>

                  <!-- Right Side Of Navbar -->
                  <ul class="navbar-nav ml-auto">
                      <!-- Authentication Links -->
                      @guest
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                          </li>
                      @else
                          <li class="nav-item dropdown">
                              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  {{ Auth::user()->name }} <span class="caret"></span>
                              </a>

                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                      {{ __('Logout') }}
                                  </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      @csrf
                                  </form>
                              </div>
                          </li>
                      @endguest
                  </ul>
              </div>
          </div>
      </nav>
  </header>
    <div id="app">
      @if(Auth::check())
        <!--main class="py-4"-->
          <div class="d-md-flex">
            <div class="sidebar" role="navigation">
              <div class="sidebar-nav collapse navbar-collapse show" id="side-menu-wrapper">
                <ul class="nav navbar-nav navbar-collapse flex-column side-nav list-group" id="side-menu">

                    <li class="list-group-item">
                        <a href="#">Acceso<span class="fa arrow"></a>
                        <ul class="nav-second-level list-group nested">
                            <li class="list-group-item">
                                <a href="#"></a>
                            </li>
                            <li class="list-group-item">
                                <a href="/empresas">Empresas</a>
                            </li>
                            <li class="list-group-item">
                                <a href="/usuarios">Usuarios</a>
                            </li>
                        </ul>
                    </li>

                    <li class="list-group-item">
                        <a href="#">Facturación<span class="fa arrow"></a>
                        <ul class="nav-second-level list-group nested">
                            <li class="list-group-item">
                                <a href="#"></a>
                            </li>
                            <li class="list-group-item">
                                <a href="/factura">Nueva factura</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#">Enviar facturas</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#">Recepción de facturas</a>
                            </li>
                        </ul>
                    </li>

                    <li class="list-group-item">
                        <a href="#">Contabilidad<span class="fa arrow"></span></a>
                        <ul class="nav-second-level list-group nested">
                            <li class="list-group-item">
                                <a href="/budget">Presupuesto general</a>
                            </li>
                            <li class="list-group-item">
                                <a href="/cuentas">Catálogo de cuentas</a>
                            </li>
                            <li class="list-group-item">
                                <a href="/compras">Solicitudes de compra</a>
                            </li>
                            <li class="list-group-item">
                                <a href="/movimientos">Movimientos de capital</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#">Balanza de comprobación</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#">Pólizas de periodo</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#">Auxiliares</a>
                            </li>
                        </ul>
                    </li>

                    <li class="list-group-item">
                      <a href="#">Reportes contables<span class="fa arrow"></span></a>
                      <ul class="nav-second-level list-group nested">
                          <li class="list-group-item">
                              <a href="#">Generar reportes</a>
                          </li>
                          <li class="list-group-item">
                              <a href="#">Consultar reportes</a>
                          </li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
        <!--/main-->
        @endif
    </div>
    <main>
      @yield('content')
      <div>Icons made by <a href="https://www.flaticon.es/autores/itim2101" title="itim2101">itim2101</a> from <a href="https://www.flaticon.es/"             title="Flaticon">www.flaticon.com</a></div>
    </main>

    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('vendor/popper/popper.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/metisMenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('vendor/datatables/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('vendor/datatables-responsive/dataTables.responsive.js')}}" type="text/javascript"></script>
    <script src="{{ asset('vendor/datatables-responsive/responsive.bootstrap4.js')}}"type="text/javascript"></script>
    <script src="{{ asset('dist/js/sb-admin-2.js') }}"></script>
    <script src="{{ asset('dist/js/select2.js') }}"></script>
    <script src="{{ asset('dist/js/Chart.min.js') }}"></script>
    <script src="{{ asset('js/forms.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

    @yield('scripts')

</body>
</html>
