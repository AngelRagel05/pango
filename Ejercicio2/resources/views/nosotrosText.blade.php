@extends('nosotros')

@section('tituloNosotros', 'Nosotros')

@section('contenidoNosotros')
    <h2>Estás en la sección sobre nosotros.</h2>

    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe magni hic sint! Ab repudiandae, amet, laudantium ex
        autem veniam enim temporibus eius repellat molestias debitis minus vel consequatur aut mollitia.
    </p>

    <img src="{{ asset('images/equipo.png') }}" alt="fotoEquipo" class="img-fluid rounded">
@endsection