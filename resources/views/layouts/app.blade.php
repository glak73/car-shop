<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('storage/css/header.css') }}" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <a href="{{ route('index') }}" class="navbar-brand me-auto ">Главная</a>
                <form action="/search" method="GET">
                    <input name="query" id="query" class="margined_header_link" placeholder="Поиск машины">

                </form>
                <a href="{{ route('car.index') }}" class="nav-item nav-link margined_header_link">Каталог</a>
                @guest

                    <a href="{{ route('register') }}" class="nav-item nav-link margined_header_link">Регистрация</a>
                    <a href="{{ route('login') }}" class="nav-item nav-link margined_header_link">Вход</a>
                @endguest
                @auth
                    <a href="{{ route('home') }}" class="nav-item nav-link margined_header_link">Личный кабинет</a>
                    <form action="{{ route('logout') }}" method="POST" class="form-inline">
                        @csrf
                        <input type="submit" class="btn btn-danger" value="Выход">
                    </form>
                @endauth

            </div>
        </nav>
        <div class="container">
            @yield('content')
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
</body>

</html>
