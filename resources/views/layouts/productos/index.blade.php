@extends('layouts.app')

@section('titulo', 'Lista de Productos')

@section('contenido')
<div class="container mx-auto px-4 my-6">
    <!-- Botón para agregar un nuevo producto -->
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Lista de Productos</h1>
        <a href="{{ route('productos.create') }}" class="btn btn-primary">+ Agregar Producto</a>
    </div>

    <!-- Verificar si hay productos -->
    @if ($productos->count() > 0)
        <!-- Tabla de productos -->
        <div class="overflow-x-auto">
            <table class="table w-full">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Stock</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($productos as $producto)
                        <tr>
                            <td>{{ $producto->id }}</td>
                            <td>{{ $producto->nombre }}</td>
                            <td>${{ number_format($producto->precio, 2) }}</td>
                            <td>{{ $producto->stock }}</td>
                            <td class="flex space-x-2">
                                <!-- Botón para editar producto -->
                                <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-secondary btn-sm">Editar</a>
                                <!-- Formulario para eliminar producto -->
                                <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar este producto?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <!-- Mensaje cuando no hay productos -->
        <div class="text-center text-gray-500 mt-6">
            <p>No hay productos disponibles.</p>
        </div>
    @endif
</div>
@endsection
