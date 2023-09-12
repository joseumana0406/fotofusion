<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContratoController;




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


Route::get('/clientes', function () {
    return view('clientes');
})->name('clientes');

Route::get('/personal', function () {
    return view('personal');
})->name('personal');

Route::get('/login', function () {
    return view('admin');
})->name('admin');

Route::get('contratos', [ContratoController::class, 'mostrarInformacion'])->name('contratos');
