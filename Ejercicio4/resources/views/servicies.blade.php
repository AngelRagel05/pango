@extends('layouts.landing')

@section('title', 'Servicies')

@section('content')
    <h1>Servicies</h1>
    @component('layouts._components.card',)
        @slot('title', 'Service 1')
        @slot('content', 'Contenido del servicio 2.')
    @endcomponent

    @component('layouts._components.card',)
        @slot('title', 'Service 2')
        @slot('content', 'Contenido del servicio 2.')
    @endcomponent
@endsection
