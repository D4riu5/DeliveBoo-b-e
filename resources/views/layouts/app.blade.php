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
            <div style="height:100px;" class="header finisher-header navbar navbar-expand-md"
                style="width: 100%; height: 200px;">
                <div class="container loginSet">
                    {{-- QUI ABBIAMO IL LINK DI COLLEGAMENTO DEL LOGO CON LA HOME - NON TOCCARE --}}
                    <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">

                        <div class="logo mediaBox">
                            <img src="{{ asset('storage/logo/7.png') }}">
                        </div>
                        {{-- config('app.name', 'Laravel') --}}
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item">
                                <a class="home navButton nav-link" href="{{ url('/') }}">{{ __('Home') }}</a>
                            </li>
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="navButton nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="navButton nav-link"
                                            href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle adminBots" href="#"
                                        role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                        v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item"
                                            href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }}</a>
                                        <a class="dropdown-item" href="{{ url('profile') }}">{{ __('Profile') }}</a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
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
            </div>
        </div>
        <div class="smallScreen">
            <div class="my-3">
                <div class="container loginSet">
                    {{-- QUI ABBIAMO IL LINK DI COLLEGAMENTO DEL LOGO CON LA HOME - NON TOCCARE --}}
                    <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
                        <div class="logo mediaBox">
                            <img src="{{ asset('storage/logo/7.png') }}">
                        </div>
                        {{-- config('app.name', 'Laravel') --}}
                    </a>
                </div>
            </div>
        </div>
        <div class="navbar-nav">
            <!-- Authentication Links -->
            @guest
                {{-- <li class="nav-item">
                    <a class="navButton nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li> --}}
                @if (Route::has('register'))
                    <div class="container-fluid text-center">
                        <li class="nav-item">
                            <a class="navButton nav-link text-light"
                                href="{{ route('register') }}">
                                <span class="fw-bold registerTitle">
                                    Registrati
                                </span>
                            </a>
                        </li>
                    </div>
                @endif
            @else
            @endguest
        </div>
    </div>
    <main class="" style="min-height: 625px">
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
