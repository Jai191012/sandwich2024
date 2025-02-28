<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\V1\ProductoController;

Route::apiResource('productos', ProductoController::class);


Route::prefix('productos')->group(function () {
    Route::get('/', [ProductoController::class, 'index']);    // Obtener todos
    Route::post('/', [ProductoController::class, 'store']);   // Crear pedido
    Route::get('{id}',[ProductoController::class, 'show']);   //
    Route::put('{id}', [ProductoController::class, 'update']);// Actualizar
    Route::delete('{id}', [ProductoController::class, 'destroy']); // Eliminar
    
    Route::prefix('v1')->group(function () {
    Route::apiResource('productos', ProductoController::class);
});

});

