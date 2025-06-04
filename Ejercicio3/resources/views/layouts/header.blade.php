<header class="py-3 mb-4">
    <div class="container d-flex justify-content-between align-items-center">
        <a href="{{ route('inicio') }}">
            <img src="{{ asset('images/header.png') }}" alt="Mi sitio web" class="img-fluid">
        </a>

        <nav>
            <a href="{{ route('inicio') }}"
                class="mx-2 nav-link {{ request()->routeIs('inicio') ? 'active' : '' }}">Inicio</a>
            <a href="{{ route('sobre.mi') }}"
                class="mx-2 nav-link {{ request()->routeIs('sobre.mi') ? 'active' : '' }}">Sobre mí</a>
            <a href="{{ route('proyectos') }}"
                class="mx-2 nav-link {{ request()->routeIs('proyectos') ? 'active' : '' }}">Proyectos</a>
            <a href="{{ route('contacto') }}"
                class="mx-2 nav-link {{ request()->routeIs('contacto') ? 'active' : '' }}">Contacto</a>
        </nav>
    </div>
</header>