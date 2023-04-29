<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>

<body class="mainColor">
    <div id="app">
        <div class="bigScreen">
            <div style="height:100px;" class="header finisher-header navbar navbar-expand-md">
                <div id="loginSet" class="container-fluid d-flex justify-content-between navbar">
                    <a href="{{ url('/') }}">
                        <div class="d-flex align-items-center mx-1">
                            <div class="logo mediaBox">
                                <img src="{{ asset('storage/logo/7.png') }}">
                            </div>
                        </div>
                    </a>

                    {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button> --}}

                    {{-- <div class="collapse navbar-collapse" id="navbarSupportedContent"> --}}
                    <!-- Left Side Of Navbar -->
                    {{-- <ul class="navbar-nav me-auto">
                            <li class="nav-item">
                                <a class="home navButton nav-link" href="{{ url('/') }}">{{ __('Home') }}</a>
                            </li>
                        </ul> --}}

                    <!-- Right Side Of Navbar -->
                    <div class="d-flex justify-content-end">
                        <!-- Authentication Links -->
                        @guest
                            <div class="nav-item ">
                                <a class="navButton fw-bold nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </div>
                            @if (Route::has('register'))
                                <div class="nav-item ps-5">
                                    <a class="navButton fw-bold nav-link adminBots" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </div>
                            @endif
                        @else
                            <div class="nav-item dropdown mx-5">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle adminBots" href="#"
                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item"
                                        href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }}</a>
                                    <a class="dropdown-item" href="{{ url('profile') }}">{{ __('Profile') }}</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        @endguest
                    </div>
                    {{-- </div> --}}
                </div>
            </div>
        </div>
        <div class="smallScreen">
            <header style="height:100px;"
                class=" d-flex flex-column header finisher-header fixed-top bg-dark d-flex justify-content-center">
                <div class="my-3">
                    <div class="container loginSet"> {{-- QUI ABBIAMO IL LINK DI COLLEGAMENTO DEL LOGO CON LA HOME - NON TOCCARE --}}
                        <a class="navbar-brand d-flex flex-column" href="{{ url('/') }}">
                            <div class="logo mediaBox">
                                <img src="{{ asset('storage/logo/7.png') }}">
                            </div>
                            {{-- config('app.name', 'Laravel') --}}
                        </a>
                    </div>
                </div>
            </header>
        </div>
        <main>
            @yield('content')
        </main>
    </div>
    <script src="{{ asset('js/finisher-header.es5.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
        new FinisherHeader({
            "count": 24,
            "size": {
                "min": 1085,
                "max": 1500,
                "pulse": 1
            },
            "speed": {
                "x": {
                    "min": 0.1,
                    "max": 0.6
                },
                "y": {
                    "min": 0.1,
                    "max": 0.5
                }
            },
            "colors": {
                "background": "#000000",
                "particles": [
                    "#000000",
                    "#363636",
                    "#000000",
                    "#100f0f",
                    "#000000"
                ]
            },
            "blending": "screen",
            "opacity": {
                "center": 0.2,
                "edge": 0.2
            },
            "skew": 0,
            "shapes": [
                "c",
                "s"
            ]
        });
    </script>
</body>

</html>
