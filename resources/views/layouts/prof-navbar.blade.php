<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Colegio Valle Abierto</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark shadow-sm" style="background-color: #265B6A">
            <div class="container">


                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item {{ (request()->is('prof')) ? 'active' : '' }}">
                          <a class="nav-link" href="{{ route('prof.index') }}">Inicio</a>
                        </li>
                        <li class="nav-item {{ (request()->is('prof/clases_impartidas')) ? 'active' : '' }}">
                          <a class="nav-link" href="{{ route('prof.clases_impartidas.index') }}">Clases</a>
                        </li>

                        <li class="nav-item {{ (request()->is('prof/listas_alumnos')) ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('prof.listas_alumnos.index') }}">Listas de Alumnos</a>
                        </li>
                        <li class="nav-item {{ (request()->is('prof/notas')) ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('prof.notas.index') }}">Notas Académicas</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}">
                                Cerrar Sesión
                            </a>
                        </li>
                        
                    </ul>

                </div>

                <span class="navbar-brand text-light">
                    Prof. {{ Auth::user()->name }}
                </span>
            </div>
        </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
