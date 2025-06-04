<header class="py-3 mb-4">
    <div class="container d-flex justify-content-between align-items-center">
        <h1 class="h3 m-0">Mi sitio web</h1>
        <nav>
            <a href="{{ route('inicio') }}"
                class="mx-2 nav-link {{ request()->routeIs('inicio') ? 'active' : '' }}">Inicio</a>
            <a href="{{ route('sobre.mi') }}"
                class="mx-2 nav-link {{ request()->routeIs('sobre.mi') ? 'active' : '' }}">Sobre
                mí</a>
            <a href="{{ route('proyectos') }}"
                class="mx-2 nav-link {{ request()->routeIs('proyectos') ? 'active' : '' }}">Proyectos</a>
            <a href="{{ route('contacto') }}"
                class="mx-2 nav-link {{ request()->routeIs('contacto') ? 'active' : '' }}">Contacto</a>
        </nav>
    </div>
</header>