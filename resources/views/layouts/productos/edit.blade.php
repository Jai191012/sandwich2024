@extends('layouts.app')

@section('titulo', 'Agregar Producto')

@section('contenido')
<div class="container mx-auto px-4 my-6">
    <!-- Título de la página -->
    <h1 class="text-2xl font-bold mb-4">Agregar Producto</h1>

    <!-- Formulario para crear un nuevo producto -->
    <form action="{{ route('productos.store') }}" method="POST">
        @csrf <!-- Token de seguridad CSRF -->

        <!-- Campo para el nombre del producto -->
        <div class="mb-4">
            <label for="nombre" class="block text-gray-700">Nombre del Producto:</label>
            <input type="text" id="nombre" name="nombre" class="form-input mt-1 block w-full" value="{{ old('nombre') }}" required>
            @error('nombre')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Campo para el precio del producto -->
        <div class="mb-4">
            <label for="precio" class="block text-gray-700">Precio:</label>
            <input type="number" id="precio" name="precio" class="form-input mt-1 block w-full" value="{{ old('precio') }}" required>
            @error('precio')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Campo para el stock del producto -->
        <div class="mb-4">
            <label for="stock" class="block text-gray-700">Stock:</label>
            <input type="number" id="stock" name="stock" class="form-input mt-1 block w-full" value="{{ old('stock') }}" required>
            @error('stock')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Botón para enviar el formulario -->
        <div class="flex justify-end">
            <button type="submit" class="btn btn-primary">Agregar Producto</button>
        </div>
    </form>
</div>
@endsection

 
