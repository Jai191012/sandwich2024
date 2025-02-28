@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Lista de Productos</h1>
    
    <!-- Botón para agregar un nuevo producto -->
    <a href="{{ route('productos.create') }}" class="btn btn-success mb-3">Agregar Producto</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if ($productos)
        <div class="row">
            @foreach ($productos as $producto)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $producto['nombre'] }}</h5>
                            <p class="card-text">Precio: ${{ number_format($producto['precio'], 2) }}</p>
                            <p class="card-text">Stock: {{ $producto['stock'] }}</p>

                            <!-- Botones de Editar y Eliminar -->
                            <a href="{{ route('productos.edit', $producto['id']) }}" class="btn btn-primary">Editar</a>

                            <form action="{{ route('productos.destroy', $producto['id']) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Seguro que quieres eliminar este producto?')">Eliminar</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p>No hay productos disponibles.</p>
    @endif
</div>
@endsection
