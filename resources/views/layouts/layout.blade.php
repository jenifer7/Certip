<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CERTIP-@yield('title')</title>

    <meta name="keywords" content="Bulma,CSS,Admin,Template,Free,Download">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.8.0/css/bulma.min.css" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('js/jquery-3.4.1.min.js') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome-font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome-font-awesome.min.css">

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-25065548-2"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>
    <nav class="navbar columns is-fixed-top" role="navigation" aria-label="main navigation" id="app-header">
        <div class="navbar-brand column is-2 is-paddingless">
            <a class="navbar-item is-tab is-hidden-mobile is-active" href="{{ url('/') }}">
                <span class="icon is-medium"><i class="fa fa-home"></i>Home</span>
            </a>

            <a role="button" class="navbar-burger burger" aria-label="{{ __('Toggle navigation') }}" aria-expanded="false" data-target="main-navbar">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div class="navbar-menu" id="main-navbar">
            <div class="navbar-start">

            </div>
            <div class="navbar-end">
                <!-- Authentication Links -->
                @guest
                @if (Route::has('register'))
                @endif
                @else
                <div class="navbar-item has-dropdown is-hoverable">
                    <a id="navbarDropdown" class="navbar-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <figure class="image avatar is-32x32">
                            <img class="is-rounded" src="images/user1.png">
                        </figure>
                        &nbsp; Hi, {{ Auth::user()->name }}
                    </a>
                    <div aria-labelledby="navbarDropdown" class="navbar-dropdown is-right">
                        <a class="navbar-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();"><i class="fa fa-lock"></i>
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                        <a class="navbar-item">
                            <span class="icon is-small">
                                <i class="fa fa-user-o"></i>
                            </span>
                            &nbsp; Perfil
                        </a>
                        <hr class="navbar-divider">
                        <div class="navbar-item">
                            Version 0.1
                        </div>
                    </div>
                </div>
                @endguest
            </div>
        </div>
    </nav>
    {{-- navbar end --}}

    <div class="columns" id="app-content">
        <div class="column is-2 is-fullheight is-hidden-touch" id="navigation">
            <aside class="menu">
                <p class="menu-label is-hidden-touch">
                    General
                </p>
                <ul class="menu-list">
                    <li>
                        <a class="is-active" >
                            <span class="icon">
                                <i class="fa fa-home"></i>
                            </span> Productos
                        </a>
                        <ul>
                            <li><a href="{{ route('pro.index') }}">Listado</a></li>
                            <li><a href="{{ route('pro.create') }}">Nuevo</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="" >
                            <span class="icon">
                                <i class="fa fa-edit"></i>
                            </span> Proveedores
                        </a>
                        <ul>
                            <li><a href="{{ route('index') }}">Listado</a></li>
                            <li><a href="{{ route('create') }}">Nuevo</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="" >
                            <span class="icon">
                                <i class="fa fa-desktop"></i>
                            </span>Clientes
                        </a>
                        <ul>
                            <li><a href="{{ route('cliente.index') }}">Listado</a></li>
                            <li><a href="{{ route('cliente.create') }}" a>Nuevo</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="">
                            <span class="icon">
                                <i class="fa fa-table"></i>
                            </span> Ventas
                        </a>
                        <ul>
                            <li><a href="{{ route('sale.index') }}">Listado</a></li>
                            <li><a href="{{ route('sale.create') }}">Nuevo</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="" href="{{ route('emplea.index') }}">
                            <span class="icon">
                                <i class="fa fa-table"></i>
                            </span> Empleados
                        </a>
                    </li>
                </ul>
            </aside>
        </div>
        <div class="column is-10" id="page-content">
            <div class="content-header">
                <h4 class="title is-4">CERTIP</h4>
                <span class="separator"></span>
                <nav class="breadcrumb has-bullet-separator" aria-label="breadcrumbs">
                    <ul>
                        <li class="is-active"><a href="#" aria-current="page">General</a></li>
                    </ul>
                </nav>
            </div>
            <div class="content-body">
                <div>
                    @yield('content')
                </div>
            </div>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
                if ($navbarBurgers.length > 0) {
                    $navbarBurgers.forEach(el => {
                        el.addEventListener('click', () => {
                            const target = el.dataset.target;
                            const $target = document.getElementById(target);
                            el.classList.toggle('is-active');
                            $target.classList.toggle('is-active');
                        });
                    });
                }
            });
        </script>

</html>