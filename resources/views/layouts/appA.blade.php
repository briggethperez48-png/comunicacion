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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link href="{{ asset('/style/web.css') }}" rel="stylesheet">
    <link href="{{ asset('/style/principal.css') }}" rel="stylesheet">
    <link href="{{ asset('/style/form.css') }}" rel="stylesheet">
</head>
<body>
        <x-theHead></x-theHead>
    <section class="my-4">
        <main class="py-2 m-4">
            @yield('content')
        </main>
    </section>
        <x-theFooter></x-theFooter>

    <script>
        const navega = document.querySelector('.navega')
        const nav = document.querySelector('.nav')
        const shadowH = document.querySelector('.header')
        const margen = document.querySelector('.margen')
            navega.addEventListener('click',()=>{
                navega.classList.toggle("active")
                nav.classList.toggle('activo')
                shadowH.classList.toggle('activo')
                margen.classList.toggle('activo')
            })
    </script>
    <script>
        const preguntas = document.querySelectorAll('.pregunta');

        preguntas.forEach(pregunta => {
            const cuestion = pregunta.querySelector('.cuestion');
            const respuesta = pregunta.querySelector('.respuesta');

            cuestion.addEventListener('click', () => {
                cuestion.classList.toggle("activo");
                respuesta.classList.toggle('activo');
            });
        });
    </script>
        <!-- Intento para quitar los acentos, se pasó al controlador-->
    <script>
        function dataTransform(str) {
            return str.normalize("NFD").replace(/[\u0300-\u036f]/g, "");
        }

        const input = document.getElementById("datos");
        datos.addEventListener("datos",  (e) => {
            e.target.value = dataTransform(e.target.value);
        });
    </script>
</body>
</html>