@extends('main')

@section('titulo', 'Inicio')

@section('contenidoMain')
    <h2>Bienvenidos a Laravel, TAD</h2>

    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe magni hic sint! Ab repudiandae, amet, laudantium ex
        autem veniam enim temporibus eius repellat molestias debitis minus vel consequatur aut mollitia.
    </p>

    <ul class="list-group">
        <li class="list-group-item">
            <span class="fw-bold">Estructura clara y organizada (MVC):</span>
            Laravel usa el patrón Modelo-Vista-Controlador, lo que facilita el mantenimiento y escalabilidad del proyecto.
        </li>
        <li class="list-group-item">
            <span class="fw-bold">Sistema de rutas y middleware potente:</span>
            Permite definir rutas fácilmente y controlar el acceso mediante middleware.
        </li>
        <li class="list-group-item">
            <span class="fw-bold">Herramientas integradas que ahorran tiempo:</span>
            Incluye Artisan para tareas automáticas, Eloquent para trabajar con bases de datos, y Blade para vistas
            reutilizables.
        </li>
    </ul>


@endsection