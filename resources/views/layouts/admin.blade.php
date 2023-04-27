<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fontawesome 6 cdn -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css'
        integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=='
        crossorigin='anonymous' referrerpolicy='no-referrer' />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>

<body class="mainColor">
    <div id="app">
        <div class="bigScreen">
            <header style="height:100px;"
                class="header finisher-header barraLogo barraColor navbar fixed-top bg-dark">
                <a class="" href="{{ env('APP_FRONTEND_URL') }}">
                    <div class="d-flex align-items-center mx-1">
                        <div class="logo">
                            {{-- LOGO ROSSO NERO --}}
                            <img src="{{ asset('storage/logo/7.png') }}">
                        </div>
                    </div>
                </a>
                <div class="d-flex">
                    <div class="centeredModificaAccount navbar-nav d-flex flex-row">
                        <div class="nav-item">
                            <a class="nav-link adminBots modificaAccount" href="{{ url('profile') }}">
                                <i class="fa-solid fa-user fa-lg fa-fw"></i> Modifica Account
                            </a>
                        </div>
                    </div>
                    <div class="navbar-nav d-flex flex-row">

                        <div class="nav-item text-nowrap">
                            <a class="nav-link adminBots modificaAccount" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                                <i class="fa-solid fa-user fa-lg fa-fw"></i>
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </header>

            <div class="container-fluid gutter margin-top">
                <nav id="sidebarMenu"
                    class="d-block backG nav navbar collapse menuQuery me-0 fixed-top marginHeader shadBox">
                    <ul class="nav menuSize">
                        <li class="nav-item">
                            <a class="nav-link colorMenu {{ Route::currentRouteName() == 'admin.dashboard' ? 'backgroundSelected' : '' }}"
                                href="{{ route('admin.dashboard') }}">
                                <i class="fa-solid fa-utensils fa-lg fa-fw iconSize"></i> La mia attività
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link colorMenu {{ Route::currentRouteName() == 'admin.food.index' ? 'backgroundSelected' : '' }}"
                                href="{{ route('admin.food.index') }}">
                                <i class="fa-solid fa-table-list fa-lg fa-fw iconSize"></i> Il mio menu
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link colorMenu {{ Route::currentRouteName() == 'admin.order.index' ? 'backgroundSelected' : '' }}"
                                href="{{ route('admin.order.index') }}">
                                <i class="fa-solid fa-arrow-down-short-wide fa-lg fa-fw iconSize"></i> I miei ordini
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link colorMenu {{ Route::currentRouteName() == 'admin.type.index' ? 'backgroundSelected' : '' }}"
                                href="{{ route('admin.type.index') }}">
                                <i class="fa-solid fa-kitchen-set fa-lg fa-fw iconSize"></i> Tipologie di cucina
                            </a>
                        </li>
                    </ul>

                </nav>
            </div>
        </div>
        <div class="smallScreen">
            <header style="height:100px;"
                class="header finisher-header navbar fixed-top bg-dark d-flex justify-content-center">
                <div class="logo">
                    <a class="navbar-brand col-md-3 col-lg-2 me-0" href="{{ env('APP_FRONTEND_URL') }}">
                        <img src="{{ asset('storage/logo/7.png') }}">
                    </a>
                </div>
                <div class="d-flex justify-content-center">
                    {{-- <div>
                    <button class="offCanva navbar-toggler position-absolute d-md-none collapsed" type="button"
                        data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    </div> --}}
                    <div class="centeredModificaAccount navbar-nav d-flex flex-row">
                        <div class="nav-item">
                            <a class="nav-link adminBots modificaAccount" href="{{ url('profile') }}">
                                <i class="fa-solid fa-user fa-lg fa-fw"></i> Account
                            </a>
                        </div>
                    </div>
                    <div class="navbar-nav d-flex flex-row">
                        <div class="nav-item text-nowrap">
                            <a class="nav-link adminBots modificaAccount" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                <i class="fa-solid fa-user fa-lg fa-fw"></i>
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </header>

            <div class="container-fluid gutter margin-top">
                <nav id="sidebarMenu"
                    class="d-block backG nav navbar collapse menuQuery me-0 fixed-top marginHeader shadBox">
                    <ul class="nav menuSize">
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteName() == 'admin.dashboard' ? 'backgroundSelected' : '' }}"
                                href="{{ route('admin.dashboard') }}">
                                <i class="fa-solid fa-utensils fa-lg fa-fw iconSize colorMenu"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteName() == 'admin.food.index' ? 'backgroundSelected' : '' }}"
                                href="{{ route('admin.food.index') }}">
                                <i class="fa-solid fa-table-list fa-lg fa-fw iconSize colorMenu"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteName() == 'admin.order.index' ? 'backgroundSelected' : '' }}"
                                href="{{ route('admin.order.index') }}">
                                <i class="fa-solid fa-arrow-down-short-wide fa-lg fa-fw iconSize colorMenu"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteName() == 'admin.type.index' ? 'backgroundSelected' : '' }}"
                                href="{{ route('admin.type.index') }}">
                                <i class="fa-solid fa-kitchen-set fa-lg fa-fw iconSize colorMenu"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <main class="col-md-12 ms-sm-auto col-lg-12 overflow-auto marginBody">
            @yield('content')
        </main>
    </div>
    </div>

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
