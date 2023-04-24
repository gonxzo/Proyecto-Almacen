<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="images/ico" href="{{ asset('img/icono.ico') }}">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/layout/grid/">
    <title>{{ config('Proyecto', 'Proyecto') }}</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/estilo.css') }}" rel="stylesheet">
    <link href="{{ asset('css/estilonav.css') }}" rel="stylesheet">
    <link href="{{ asset('css/estilonav.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">



    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/select2.min.js') }}" defer></script>
    <script src="{{ asset('js/composicion/funciones.js') }}" defer></script>
    <script src="{{ asset('js/componentes.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js" defer></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js" defer></script>



    <title>Document</title>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-laravel navbar-nav nav-link">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}">
                    <img src="{{ asset('img/logo.png') }}" alt="...">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <strong> <ul class="navbar-nav mr-auto ">
                        @can('materials.index')
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">MATERIALES</a>
                           <div class="dropdown-menu" style="background-color: #b1b1b3">
                               @can('materials.index')
                               <a class="dropdown-item" href="{{ route('materials.index') }} ">MATERIAL GENERAL</a>
                               @endcan
                               @if (Auth::user()->id <> 22 )
                               @can('pedidos.index')
                               <a class="dropdown-item" href="{{ route('pedidomaterials.index') }} ">MATERIALES EN ALMACEN</a>
                           @endcan
                               @endif
                             

                           </div> 
                       </li>
                       @endcan
                       @can('herramientas.index')
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">HERRAMIENTAS</a>
                           <div class="dropdown-menu" style="background-color: #b1b1b3">
                            @can('clasherramientas.index')
                            <a class="dropdown-item" href="{{ route('clasherramientas.index') }} ">CLASIFICACION
                                HERRAMIENTAS</a>
                        @endcan
                        @can('herramientas.index')
                        <a class="dropdown-item" href="{{ route('herramientas.index') }} ">HERRAMIENTAS GENERAL</a>
                         @endcan
                         @if ( Auth::user()->id <> 22 )
                            @can('pedidoherras.index')
                            <a class="dropdown-item" {{-- href="{{ route('pedidoherramientas.index') }} " --}}>HERRAMIENTAS EN ALMACEN</a>
                            @endcan
                         @endif
                              
                           </div>
                       </li>
                       @endcan
                         @can('proyectos.index')
                         <li class="nav-item">
                             <a class="nav-link dropdown-toggle" href="{{ route('proyectos.index') }} ">PROYECTOS</a>
                          </li>
                          @endcan
                       
                        @can('regpedidomaterials.index')
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">ENVIO A ALMACENES</a>
                            <div class="dropdown-menu" style="background-color: #b1b1b3">
                                @can('pedidocoms.index')
                                    <a class="dropdown-item" href="{{ route('regpedidomaterials.index') }} ">ENVIO MATERIALES</a>
                                @endcan
                                @can('pedidohs.index')
                                    <a class="dropdown-item" {{-- href="{{ route('regpedidoherramientas.index') }} " --}}>ENVIO HERRAMIENTAS</a>
                                @endcan
                            </div>
                        </li>
                        @endcan
                        @can('regpedidomaterials.reporte')
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">REPORTES</a>
                            <div class="dropdown-menu" style="background-color: #b1b1b3">
                                @can('clasherramientas.index')
                                    <a class="dropdown-item" href="{{ route('regpedidomaterials.reporte') }} ">REPORTES POR FECHA</a>
                                @endcan

                            </div>
                        </li>
                        @endcan
                        @can('trabajadors.index')
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">PERSONAL</a>
                            <div class="dropdown-menu" style="background-color: #b1b1b3">
                                @can('trabajadors.index')
                                    <a class="dropdown-item" href="{{ route('trabajadors.index') }} ">TRABAJADORES</a>
                                @endcan
                                @can('users.index')
                                    <a class="dropdown-item" href="{{ route('users.index') }} ">USUARIOS</a>
                                @endcan
                                @can('roles.index')
                                    <a class="dropdown-item" href="{{ route('roles.index') }} ">ROLES</a>
                                @endcan

                            </div>
                        </li>
                        @endcan
            
                     </ul></strong>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('INGRESAR') }}</a>
                        </li> --}}
                            @if (Route::has('register'))
                           {{--  <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('REGISTRARSE') }}</a>
                            </li> --}}
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                   
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                        {{ __('Salir') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
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
        @yield('js')
    </div>
  
</body>

</html>
