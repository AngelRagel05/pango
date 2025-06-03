@extends('servicios')

@section('tituloServicios', 'Servicios')

@section('contenidoServicios')
    <h2 class="mb-4">Nuestros Servicios</h2>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
        <div class="col">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Desarrollo Web</h5>
                    <p class="card-text">Creamos sitios y aplicaciones web modernas, seguras y responsivas.</p>
                    <a href="#" class="btn btn-primary">Saber más</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Mantenimiento</h5>
                    <p class="card-text">Ofrecemos soporte técnico y actualizaciones para tus plataformas digitales.</p>
                    <a href="#" class="btn btn-primary">Saber más</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">SEO & Marketing</h5>
                    <p class="card-text">Optimizamos tu presencia en buscadores para aumentar tu visibilidad online.</p>
                    <a href="#" class="btn btn-primary">Saber más</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Consultoría</h5>
                    <p class="card-text">Te ayudamos a definir estrategias tecnológicas para mejorar tu negocio.</p>
                    <a href="#" class="btn btn-primary">Saber más</a>
                </div>
            </div>
        </div>
    </div>
@endsection