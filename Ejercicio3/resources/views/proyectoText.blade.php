@extends('proyecto')

@section('titulo', 'Proyecto')

@section('contenidoProyecto')
    <div class="container">
        <h2 class="mb-4">Estás viendo el proyecto con ID: {{ $numero }}</h2>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 g-4">
            <div class="col">
                <div class="card h-100 shadow">
                    <div class="card-body">
                        <h5 class="card-title">Gestor de Tareas</h5>
                        <p class="card-text">App para crear, editar y marcar tareas como completadas. Con registro de usuarios y autenticación.</p>
                    </div>
                    <div class="card-footer bg-transparent">
                        <small class="text-muted">Laravel · Bootstrap · MySQL</small>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow">
                    <div class="card-body">
                        <h5 class="card-title">Blog Personal</h5>
                        <p class="card-text">Publicación de artículos con categorías, comentarios y gestión por roles (admin/lector).</p>
                    </div>
                    <div class="card-footer bg-transparent">
                        <small class="text-muted">Laravel · Blade · Middleware</small>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow">
                    <div class="card-body">
                        <h5 class="card-title">Tienda Online</h5>
                        <p class="card-text">E-commerce básico con catálogo de productos, carrito y proceso de compra simple.</p>
                    </div>
                    <div class="card-footer bg-transparent">
                        <small class="text-muted">Laravel · JS · Bootstrap</small>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow">
                    <div class="card-body">
                        <h5 class="card-title">Buscador de Recetas</h5>
                        <p class="card-text">Busca recetas por nombre o ingredientes, guarda favoritas y accede al detalle completo.</p>
                    </div>
                    <div class="card-footer bg-transparent">
                        <small class="text-muted">HTML · JS · PHP</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
