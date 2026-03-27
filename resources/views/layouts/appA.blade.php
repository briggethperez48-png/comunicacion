<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Style -->

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link href="{{ asset('/build/assets/web.css') }}" rel="stylesheet">
</head>
<body>
        <x-theHead></x-theHead>
    <section class="my-4">
        <main class="py-2 m-4">
            @yield('content')
        </main>
    </section>
        <x-theFooter></x-theFooter>
</body>
</html>