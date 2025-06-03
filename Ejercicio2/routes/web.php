<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('mainText');
})->name('inicio');

Route::get('/quienes-somos', function () {
    return view('nosotrosText');
})->name('quienes.somos');

Route::get('/proyecto/{numero?}', function ($numero = 1) {
    if ($numero <= 0) {
        return redirect('/')->with('error', 'El número del proyecto debe ser mayor que cero.');
    }
    return view('proyectoText', ['numero' => $numero]);
})->name('proyecto');

Route::get('/servicios', function () {
    return view('serviciosText');
})->name('servicios');

Route::get('/contacto', function () {
    return view('contactoText');
})->name('contacto');