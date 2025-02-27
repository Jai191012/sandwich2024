<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
    <style>
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid black; padding: 8px; text-align: left; }
    </style>
</head>
<body>
    <a href="/">inicio</a>
    <h1>Lista de Productos</h1>

    @if (count($productos) > 0)
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Stock</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                <tr>
                    <td>{{ $producto['id'] }}</td>
                    <td>{{ $producto['nombre'] }}</td>
                    <td>{{ $producto['precio'] }}</td>
                    <td>{{ $producto['stock'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No hay productos disponibles.</p>
    @endif

</body>
</html>
