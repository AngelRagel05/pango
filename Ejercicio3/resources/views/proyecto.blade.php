<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('Logo.ico') }}" type="image/x-icon">

    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sobreMi.css') }}">

    <title>@yield('title', 'Mi sitio web')</title>
</head>

<body>
    @include('layouts.header')

    <main class="container my-5">
        @yield('contenidoProyecto')
    </main>

    @include('layouts.footer')
</body>

</html>
