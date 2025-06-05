@extends('contacto')

@section('titulo', 'Contacto')

@section('contenidoContacto')
    <div class="container">
        <h2 class="mb-4">Contacta con Nosotros</h2>

        <form method="POST" action="{{ route('contacto.enviar') }}">
            @csrf

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Correo electrónico</label>
                <input type="email" name="email" id="email" class="form-control">
            </div>

            <div class="mb-3">
                <label for="mensaje" class="form-label">Mensaje</label>
                <textarea name="mensaje" id="mensaje" rows="4" class="form-control"></textarea>
            </div>

            <button type="submit" class="btn btn-success">Enviar</button>
        </form>
    </div>
@endsection