<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PedidoWebController;
use App\Http\Controllers\ProductoController;

Route::get('/productos', [ProductoController::class, 'index']);



// Ruta para la página de inicio
Route::view('/', 'welcome');


Route::resource('productos', ProductoController::class);


// Listar productos
Route::get('/productos', [ProductoController::class, 'index'])->name('productos.index');

// Mostrar formulario para agregar
Route::get('/productos/create', [ProductoController::class, 'create'])->name('productos.create');

// Guardar nuevo producto
Route::post('/productos', [ProductoController::class, 'store'])->name('productos.store');

// Mostrar formulario para editar
Route::get('/productos/{id}/edit', [ProductoController::class, 'edit'])->name('productos.edit');

// Actualizar producto
Route::put('/productos/{id}', [ProductoController::class, 'update'])->name('productos.update');

// Eliminar producto
Route::delete('/productos/{id}', [ProductoController::class, 'destroy'])->name('productos.destroy');
