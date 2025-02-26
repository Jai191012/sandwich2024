<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

// Ruta para la página de inicio
Route::view('/', 'welcome');

// Rutas para el recurso 'productos'
Route::resource('productos', ProductoController::class);
