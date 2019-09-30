<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title></title>

    <!-- Scripts -->

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
    <link rel="stylesheet" href="{{asset('vendor/datatables-responsive/dataTables.responsive.css')}}">

</head>
<body>
  <header>
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
          <div class="container">
              <a class="navbar-brand" href="{{ url('/') }}">
                  {{ config('app.name', 'Laravel') }}
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
                        <a href="#"><i class="fa fa-cubes"></i>Usuarios</a>
                        <ul class="nav-second-level list-group nested">
                            <li class="list-group-item">
                                <a href="#">Gestión de Almacén</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#">Gestión de Salidas</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#">Registrar Salidas</a>
                            </li>
                        </ul>
                    </li>

                    <li class="list-group-item">
                        <a href="#"><i class="fa fa-th-list"></i> Categorías</a>
                    </li>

                    <li class="list-group-item">
                        <a href="#"><i class="fa fa-fax"></i> Punto de venta</a>
                    </li>

                    <li class="list-group-item">
                        <a href="#"><i class="fa fa-money"></i> Ventas<span class="fa arrow"></span></a>
                        <ul class="nav-second-level list-group nested">
                            <li class="list-group-item">
                                <a href="#">Gestión de ventas</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#">Ventas semanales</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#">Devoluciones</a>
                            </li>
                        </ul>
                    </li>

                    <li class="list-group-item">
                        <a href="#"><i class="fa fa-users"></i> Clientes<span class="fa arrow"></span></a>
                        <ul class="nav-second-level list-group nested">
                            <li class="list-group-item">
                                <a href="#">Cartera de clientes</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#">Importación de clientes</a>
                            </li>
                        </ul>
                    </li>

                    <li class="list-group-item">
                        <a href="#"><i class="fa fa-credit-card"></i> Abonos<span class="fa arrow"></span></a>
                        <ul class="nav-second-level list-group nested">
                            <li class="list-group-item">
                                <a href="#">Gestión de Abonos</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#">Abonos Cancelados</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#">Ver deudas actuales</a>
                            </li>
                        </ul>
                    </li>

                    <li class="list-group-item">
                        <a href="#"><i class="fa fa-file-text"></i> Proveedores<span class="fa arrow"></span></a>
                        <ul class="nav-second-level list-group nested">
                            <li class="list-group-item">
                                <a href="#">Gestión de proveedores</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#">Deudas a proveedores</a>
                            </li>
                        </ul>
                    </li>

                    <li class="list-group-item">
                        <a href="#"><i class="fa fa-cart-arrow-down"></i> Compras<span class="fa arrow"></span></a>
                        <ul class="nav-second-level list-group nested">
                            <li class="list-group-item">
                                <a href="#"> Compras</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#"> Gestión de compras</a>
                            </li>
                        </ul>
                    </li>

                </ul>
              </div>
            </div>

          </div>
        <!--/main-->
        @endif
        @yield('content')
    </div>

    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('vendor/popper/popper.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/metisMenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('vendor/datatables/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('vendor/datatables-responsive/dataTables.responsive.js')}}" type="text/javascript"></script>
    <script  src="{{ asset('vendor/datatables-responsive/responsive.bootstrap4.js')}}"type="text/javascript"></script>
    <script src="{{ asset('dist/js/sb-admin-2.js') }}"></script>
    <script src="{{ asset('js/sb-admin-2.js') }}"></script>
    <script src="{{ asset('dist/js/select2.js') }}"></script>
    <script src="{{ asset('dist/js/Chart.min.js') }}"></script>
    <script src="{{ asset('js/js.js') }}" defer></script>
    <script src="{{ asset('js/chartSales.js') }}" defer></script>

    @yield('scripts')
</body>
</html>
