<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\MostrarCitasController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

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
Route::get('/citas', [MostrarCitasController::class, 'mostrarCitas']);
