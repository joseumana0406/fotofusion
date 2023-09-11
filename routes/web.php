<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



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
    return view('login');
})->name('login');


