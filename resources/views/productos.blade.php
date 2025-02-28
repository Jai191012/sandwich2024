<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 0;
            background-color: #f8f9fa;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .btn {
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 5px;
            color: white;
            background-color: #007bff;
            border: none;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        .productos-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
        }
        .card {
            background: white;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .card h3 {
            margin: 0;
        }
        .card p {
            margin: 5px 0;
        }
        .buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }
        .btn-danger {
            background-color: #dc3545;
        }
        .btn-danger:hover {
            background-color: #a71d2a;
        }
    </style>
</head>
<body>

    <div class="header">
        <a href="/" class="btn">Inicio</a>
        <a href="/productos/create" class="btn">+ Agregar Producto</a>
    </div>

    <h1>Lista de Productos</h1>

    @if (count($productos) > 0)
        <div class="productos-container">
            @foreach ($productos as $producto)
                <div class="card">
                    <h3>{{ $producto['nombre'] }}</h3>
                    <p><strong>Precio:</strong> ${{ number_format($producto['precio'], 2) }}</p>
                    <p><strong>Stock:</strong> {{ $producto['stock'] }}</p>
                    <div class="buttons">
                        <a href="/productos/{{ $producto['id'] }}/edit" class="btn">Editar</a>
                        <form action="/productos/{{ $producto['id'] }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p>No hay productos disponibles.</p>
    @endif

</body>
</html>
