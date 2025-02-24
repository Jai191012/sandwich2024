<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\ProductoController;

Route::apiResource("v1/productos", App\Http\Controllers\Api\V1\ProductoController::class);