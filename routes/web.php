<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::view('/', 'welcome');
Route::resource("productos", App\Http\Controllers\ProductoController::class);
