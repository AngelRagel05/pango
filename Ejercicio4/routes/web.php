<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('index');
Route::view('/about','about')->name('about');
Route::view('/servicies','servicies')->name('servicies');
Route::view('/contact','contact')->name('contact');