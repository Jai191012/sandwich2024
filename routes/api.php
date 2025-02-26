<?php

use Illuminate\Support\Facades\Route;

// Página de inicio
Route::get('/', function () {
    return view('welcome');
});

// Rutas para la API
Route::prefix('api')->group(function () {
    Route::get('/documentation', function () {
        return redirect('https://sandwich2024.test/api/documentation');
    });
});

// Rutas para gestión desde el navegador
Route::prefix('pedidos')->group(function () {
    Route::get('/', [App\Http\Controllers\OrderController::class, 'index'])->name('pedidos.index');
    Route::get('/crear', [App\Http\Controllers\OrderController::class, 'create'])->name('pedidos.create');
});

Route::prefix('clientes')->group(function () {
    Route::get('/', [App\Http\Controllers\ClientController::class, 'index'])->name('clientes.index');
});

Route::prefix('entregas')->group(function () {
    Route::get('/', [App\Http\Controllers\DeliveryController::class, 'index'])->name('entregas.index');
});
