<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MostrarCitasController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');


Route::get('/admin', function () {
    return view('admin');
})->name('admin');


Route::get('/registro', function () {
    return view('create');
})->name('registro');

Route::get('/citas', function () {
    return view('citas');
})->name('citas');

Route::get('/clientes', function () {
    return view('clientes');
})->name('clientes');

Route::get('/personal', function () {
    return view('personal');
})->name('personal');

Route::get('/login', function () {
    return view('admin');
})->name('admin');


