<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @yield('styles')

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/img/ico/Logo.ico') }}" type="image/x-icon">

    <title>
        @yield('title', 'Mi sitio web')
    </title>
</head>

<body>
    @include('layouts._partials.menu')
    @yield('content')
    @yield('scripts')
</body>

</html>
