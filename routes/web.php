<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('mainText');
})->name('inicio');

Route::get('/quienes-somos', function () {
    return view('nosotrosText');
})->name('quienes.somos');

Route::get('/proyecto', function () {
    return view('proyectoText');
})->name('proyecto');