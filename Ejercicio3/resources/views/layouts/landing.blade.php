<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    @yield('custom_css')

    <title>
        @yield('titulo', 'Mi sitio web')
    </title>
</head>

<body>
    @include('layouts.header')

    <main class="container my-5">
        @yield('contenido')
    </main>

    @include('layouts.footer')
</body>

</html>
