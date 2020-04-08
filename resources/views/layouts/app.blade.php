<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Contabilidad</title>

    <!-- icon -->
    <link rel="icon" type="image/png" href="{{asset('img/icon.png')}}" />

		<link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="{{ asset('css/style.css')}}">
        <link href="{{ asset('css/forms.css')}}" rel="stylesheet">
        @yield('styles')

  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
             @auth
			<nav id="sidebar">
				<div class="p-4 pt-5">
		  		
	        <ul class="list-unstyled components mb-5">
              <li class="active">
                <a href="{{ url('/home') }}">
                    Bienvenid@ {{ Auth::user()->name }}
                </a>
	          </li>
	          <li>
	            <a href="#accessSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Acceso</a>
	            <ul class="collapse list-unstyled" id="accessSubmenu">
                    <li>
                        <a href="{{url('/empresa_registrar')}}">Registrar cliente</a>
                    </li>
                    <li>
                        <a href="{{url('/empresas_consultar')}}">Consultar clientes</a>
                    </li>
                    <li>
                        <a href="{{url('/usuario_registrar')}}">Registrar usuario</a>
                    </li>
                    <li>
                        <a href="{{url('/usuarios_consultar')}}">Consultar usuarios</a>
                    </li>
	            </ul>
	          </li>
	          <li>
                <a href="#taxSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Facturación</a>
                <ul class="collapse list-unstyled" id="taxSubmenu">
                    <li>
                        <a href="{{url('/factura')}}">Nueva factura</a>
                    </li>
                </ul>
	          </li>
              <li>
	            <a href="#accountancySubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Contabilidad</a>
	            <ul class="collapse list-unstyled" id="accountancySubmenu">
                    <li>
                        <a href="{{url('/budget')}}">Presupuestos</a>
                    </li>
                    <li>
                        <a href="{{url('/cuentas')}}">Catálogo de cuentas</a>
                    </li>
                    <li>
                        <a href="{{url('/compras')}}">Solicitar compra</a>
                    </li>
                    <li>
                        <a href="{{url('/compras_consultar')}}">Solicitudes de compra</a>
                    </li>
                    <li>
                        <a href="{{url('/flujo_capital')}}">Flujo de capital</a>
                    </li>
	            </ul>
	          </li>
              <li>
	            <a href="#reportSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Reportes contables</a>
	            <ul class="collapse list-unstyled" id="reportSubmenu">
                    <li>
                        <a href="{{url('/generar_reportes')}}">Generar reportes</a>
                    </li>
	            </ul>
	          </li>
	          <li>
              <a href="/configuracion">
                @auth 
                    {{ __('Configuración') }}
                @endauth
              </a>
	          </li>
	          <li>
              <a href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                      {{ __('Cerrar sesión') }}
                                  </a>
                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      @csrf
                                  </form>
	          </li>
	        </ul>

	      </div>
    	</nav>
        @endauth
        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

        <main>
            
                @yield('content')
            
        </main>
      </div>
	</div>
    @yield('jquery')
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
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

    @yield('scripts')
  </body>
</html>