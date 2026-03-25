<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
            @vite(['resources/css/app.css', 'resources/js/app.js'])
       
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">Mi Proyecto UNAM</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Documentación</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    <div class="container mt-5">
        <div class="jumbotron">
            <h1 class="display-4">¡Laravel 13 + Bootstrap!</h1>
            <p class="lead">Si ves este recuadro gris con bordes redondeados y el botón azul, la configuración es correcta.</p>
            <hr class="my-4">
            <p>Ya puedes empezar a desarrollar tu sistema de registro o tu compendio de código.</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Probar Botón</a>
        </div>
    </div>
    </body>
</html>
