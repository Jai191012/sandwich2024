<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use zApp\Http\Controllers\Api\V1\ProductoController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});