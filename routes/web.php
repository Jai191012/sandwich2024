<?php

use Illuminate\Support\Facades\Route;
#use App\Http\Controllers\Api\V1\ProductoController;
use App\Http\Controllers\PedidoWebController;

use App\Http\Controllers\ProductoController;

Route::get('/productos', [ProductoController::class, 'index']);



// Ruta para la página de inicio
Route::view('/', 'welcome');

