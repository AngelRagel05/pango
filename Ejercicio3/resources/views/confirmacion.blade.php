@extends('contacto')

@section('titulo', 'Mensaje Enviado')

@section('contenido')
    <div class="container text-center mt-5">
        <h2>Gracias por contactarnos</h2>
        <p><strong>Nombre:</strong> {{ $nombre }}</p>
        <p><strong>Email:</strong> {{ $email }}</p>
        <p><strong>Mensaje:</strong> {{ $mensaje }}</p>
    </div>
@endsection
