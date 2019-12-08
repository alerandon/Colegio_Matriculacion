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
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">


                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item {{ (request()->is('admin')) ? 'active' : '' }}">
                          <a class="nav-link" href="{{ route('admin.index') }}">Inicio</a>
                        </li>
                        <li class="nav-item {{ (request()->is('admin/años_escolares')) ? 'active' : '' }}">
                          <a class="nav-link" href="{{ route('admin.años_escolares.index') }}">Periodos escolares</a>
                        </li>

                        <li class="nav-item {{ (request()->is('admin/materias')) ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('admin.materias.index') }}">Materias</a>
                        </li>

                        <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Registros
                                </a>
                                
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item {{ (request()->is('admin/alumnos')) ? 'active' : '' }}" href="{{ route('admin.alumnos.index') }}">Alumnos</a>
                                  <a class="dropdown-item {{ (request()->is('admin/representantes')) ? 'active' : '' }}" href="{{ route('admin.representantes.index') }}">Representantes</a>

                                  <div class="dropdown-divider"></div>

                                  <a class="dropdown-item {{ (request()->is('admin/usuarios')) ? 'active' : '' }}" href="{{ route('admin.usuarios.index') }}">Usuarios</a>
                                  <a class="dropdown-item {{ (request()->is('admin/profesores')) ? 'active' : '' }}" href="{{ route('admin.profesores.index') }}">Profesores</a>
                                  
                                  <div class="dropdown-divider"></div>

                                  <a class="dropdown-item {{ (request()->is('admin/ver_notas')) ? 'active' : '' }}" href="{{ route('admin.ver_notas.index') }}">Ver notas</a>

                                </div>
                        </li>

                        <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}">
                                    Cerrar Sesión
                                </a>
                        </li>
                        
                    </ul>

                </div>

                <span class="navbar-brand text-light">
                    Administrador
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
