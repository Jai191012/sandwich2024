<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Producto;

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

    public function destroy($id)
    {
        // Hacer una solicitud DELETE a la API
        $response = Http::delete("http://sandwich2024.test/api/v1/productos/{$id}");

        if ($response->successful()) {
            return response()->json(['message' => 'Producto eliminado correctamente']);
        } else {
            return response()->json(['error' => 'Error al eliminar el producto'], $response->status());
        }
    } // 
}


