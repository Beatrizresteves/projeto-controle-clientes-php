<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Rotas para gerenciamento de clientes
Route::post('/cliente', [ClienteController::class, 'store']); // Cadastro de novo cliente
Route::put('/cliente/{id}', [ClienteController::class, 'update']); // Edição de um cliente existente
Route::delete('/cliente/{id}', [ClienteController::class, 'destroy']); // Remoção de um cliente existente
Route::get('/cliente/{id}', [ClienteController::class, 'show']); // Consulta de dados de um cliente
Route::get('/consulta/final-placa/{numero}', [ClienteController::class, 'consultaPorFinalPlaca']); // Consulta por final de placa

