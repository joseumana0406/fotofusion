<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\ContratoController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('clientes', [ClienteController::class, 'mostrartodo']);
Route::get('clientes/{cedulaCliente}', [ClienteController::class, 'show']);
Route::post('clientes', [ClienteController::class, 'store']);
Route::post('clientes/update/{cedulaCliente}', [ClienteController::class, 'update']);
//Route::delete('clientes/{cedulaCliente}', [ClienteController::class, 'destroy']); //aun no se utilizara

Route::get('personal/login', [PersonalController::class, 'loginForm'])->name('personal.loginForm');
Route::post('personal/login', [PersonalController::class, 'login'])->name('personal.login');
Route::get('/citas', [ContratoController::class, 'mostrarCitas']);
Route::get('/contratos', [ContratoController::class, 'mostrarContrato']);  //mostrar contratos
Route::post('/registrarc', [ContratoController::class, 'registrarContrato']);  //registrar contratos