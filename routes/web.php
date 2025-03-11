<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

// Página de inicio
Route::get('/', function () {
    return view('welcome');
});

// Rutas protegidas (solo usuarios autenticados pueden acceder)
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/productos', [ProductoController::class, 'index'])->name('productos.index');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Incluir rutas de autenticación (login, registro, etc.)
require __DIR__.'/auth.php';
