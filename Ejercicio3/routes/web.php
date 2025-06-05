<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ContactoController;

Route::get('/', function () {
    return view('inicioText');
})->name('inicio');

Route::get('/sobre-mi', function () {
    return view('sobreMiText');
})->name('sobre.mi');

Route::get('/proyectos/{numero?}', function ($numero = 1) {
    if ($numero <= 0 || !is_numeric($numero)) {
        return redirect('/')->with('error', 'El número del proyecto debe ser mayor que cero.');
    }
    return view('proyectoText', ['numero' => $numero]);
})->name('proyectos');

Route::get('/contacto', function () {
    return view('contactoText');
})->name('contacto');

Route::get('/contacto', [ContactoController::class, 'formulario'])->name('contacto');
Route::post('/contacto', [ContactoController::class, 'enviar'])->name('contacto.enviar');
