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
     
        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

        <main>
        <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="text-align:center;">{{ __('Inicio de sesión') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('Correo:') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña:') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4" style="margin-left:auto;margint-right:auto;">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Iniciar sesión') }}
                                </button>
                                <br>
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Olvidate tu contraseña?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
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