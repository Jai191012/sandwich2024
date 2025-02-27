<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductoController extends Controller
{
    public function index()
    {
        // Llamar a la API de productos
        $response = Http::get('http://sandwich2024.test/api/productos');

        // Manejo de errores
        $productos = $response->successful() ? $response->json() : [];

        // Pasar los datos a la vista
        return view('productos', compact('productos'));
    }
}
