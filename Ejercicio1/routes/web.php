<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('mainText');
})->name('inicio');

Route::get('/quienes-somos', function () {
    return view('nosotrosText');
})->name('quienes.somos');

Route::get('/proyecto/{numero?}', function ($numero = 1) {
    return view('proyectoText', ['numero' => $numero]);
})->name('proyecto');
