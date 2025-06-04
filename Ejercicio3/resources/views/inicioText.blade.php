@extends('inicio')

@section('titulo', 'Inicio')

@section('contenidoInicio')
    <h2>Mi Portafolio en Laravel</h2>

    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe magni hic sint! Ab repudiandae, amet, laudantium ex
        autem veniam enim temporibus eius repellat molestias debitis minus vel consequatur aut mollitia.
    </p>

    <p>Fecha actual: {{ date('d/m/Y') }}</p>
    <p>Hora actual: {{ date('H:i:s') }}</p>
@endsection