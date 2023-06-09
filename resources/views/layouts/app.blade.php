<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!--ICON BOOTSTRAP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> 
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    
   
    
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<style>
    /* Cajas con contenido de color */
    .bi {
    font-size: 5em;
  }
  .botonesTabla {
    font-size: 1em;
  }
  
  .bimostarturnomañana {
    font-size: 25px;
  }
  .bitexto {
    font-size: 25px;
  }
.box-blue,
.box-gray,
.box-green,
.box-grey,
.box-red,
.box-yellow {
	margin:0 0 25px;
	overflow:hidden;
	padding:20px;
	-webkit-border-radius: 10px;
    border-radius: 10px;
}

.box-blue {
	background-color:#d8ecf7;
	border:1px solid #afcde3;
}

.box-gray {
	background-color:#e2e2e2;
	border:1px solid #bdbdbd;
}

.box-green {
	background-color:#d9edc2;
	border:1px solid #b2ce96;
}

.box-grey {
	background-color:#F5F5F5;
	border:1px solid #DDDDDD;
}

.box-red {
	background-color:#f9dbdb;
	border:1px solid #e9b3b3;
}

.box-yellow {
	background-color:#fef5c4;
	border:1px solid #fadf98;
}
.contenido{
width:100%;
display:flex;
flex-wrap:wrap;
}
.inner{
margin:5px;
flex:1;
min-width:200px;
padding:20px;
text-align: center
}
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

  
</style>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                      
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        {{-- @if(Auth::check())
                         <li class="nav-item">
                            <a class="nav-link" href="{{ url('/home') }}">Inicio</a>
                        </li>
                         <li class="nav-item">
                             <a class="nav-link" href="{{ url('alumnos/index') }}">Alumnos</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="{{ url('profesores/index') }}">Profesores</
                         @endif        --}}
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else

                        {{-- <ul class="navbar-nav me-auto">
                            <li>
                                <a class="nav-item" href="#">Médicos</a>
                                <a class="nav-item" href="#">Pacientes</a>
                                <a class="nav-item" href="#">Turnos</a>
                            </li>
                        </ul> --}}
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                    
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
     <!--JQUERY-->
     <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <!-- Scripts MASCARA -->
    <script src="{{asset('mascara.js')}}"> </script>
</body>
</html>
