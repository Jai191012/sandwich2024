<?php

use Illuminate\Support\Facades\Route;

/*registro de rutas 

*/

Route::view('/', 'welcome');
Route::resource("productos", App\Http\Controllers\ProductoController::class);