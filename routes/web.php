<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('mainText');
})->name('inicio');

Route::get('/quienes-somos', function () {
    return view('nosotros');
})->name('quienes.somos');
