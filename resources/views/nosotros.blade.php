<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>@yield('tituloNosotros')</title>
</head>

<body>
    @include('layouts.header')

    <main class="container my-5">
        @yield('contenidoNosotros')
    </main>

    @include('layouts.footer')
</body>

</html>