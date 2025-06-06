<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


use App\Http\Controllers\UsuarioController;

Route::get('/usuarios', [UsuarioController::class, 'index']);        // Listar todos
Route::post('/usuarios', [UsuarioController::class, 'store']);       // Criar
Route::get('/usuarios/{id}', [UsuarioController::class, 'show']);    // Buscar por ID
Route::put('/usuarios/{id}', [UsuarioController::class, 'update']);  // Atualizar
Route::delete('/usuarios/{id}', [UsuarioController::class, 'destroy']); // Deletar