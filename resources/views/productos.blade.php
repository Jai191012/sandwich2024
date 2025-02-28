<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f8f9fa;
        }
        .btn {
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
        .btn-danger {
            background-color: #dc3545;
        }
        .btn-danger:hover {
            background-color: #a71d2a;
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
        }
        .buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }
        .modal, .modal-agregar, .modal-editar {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.2);
            z-index: 1000;
        }
        .modal-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }
    </style>
</head>
<body>


    <!-- Botón para volver a la página de inicio -->
    <button class="btn" onclick="window.location.href='/'">Inicio</button>
    
    <button class="btn" onclick="abrirModalAgregar()">+ Agregar Producto</button>
    
    <h1>Lista de Productos</h1>

    <div id="productos-container" class="productos-container">
        @foreach ($productos as $producto)
            <div class="card" id="producto-{{ $producto['id'] }}">
                <h3>{{ $producto['nombre'] }}</h3>
                <p><strong>Precio:</strong> ${{ number_format($producto['precio'], 2) }}</p>
                <p><strong>Stock:</strong> {{ $producto['stock'] }}</p>
                <div class="buttons">
                    <button class="btn" onclick="abrirModalEditar({{ $producto['id'] }}, '{{ $producto['nombre'] }}', {{ $producto['precio'] }}, {{ $producto['stock'] }})">Editar</button>
                    <button class="btn btn-danger" onclick="eliminarProducto({{ $producto['id'] }})">Eliminar</button>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Modal para agregar producto -->
    <div class="modal-overlay" id="modal-overlay"></div>
    <div class="modal-agregar" id="modal-agregar">
        <h2>Agregar Producto</h2>
        <label>Nombre:</label>
        <input type="text" id="add-nombre"><br>
        <label>Precio:</label>
        <input type="number" id="add-precio" step="0.01"><br>
        <label>Stock:</label>
        <input type="number" id="add-stock"><br>
        <button class="btn" onclick="guardarNuevoProducto()">Guardar</button>
        <button class="btn btn-danger" onclick="cerrarModalAgregar()">Cancelar</button>
    </div>

    <!-- Modal para editar producto -->
    <div class="modal-editar" id="modal-editar">
        <h2>Editar Producto</h2>
        <input type="hidden" id="edit-id">
        <label>Nombre:</label>
        <input type="text" id="edit-nombre"><br>
        <label>Precio:</label>
        <input type="number" id="edit-precio" step="0.01"><br>
        <label>Stock:</label>
        <input type="number" id="edit-stock"><br>
        <button class="btn" onclick="guardarEdicionProducto()">Guardar Cambios</button>
        <button class="btn btn-danger" onclick="cerrarModalEditar()">Cancelar</button>
    </div>

    <script>
        function abrirModalAgregar() {
            $("#modal-agregar, #modal-overlay").fadeIn();
        }

        function cerrarModalAgregar() {
            $("#modal-agregar, #modal-overlay").fadeOut();
        }

        function abrirModalEditar(id, nombre, precio, stock) {
            $("#edit-id").val(id);
            $("#edit-nombre").val(nombre);
            $("#edit-precio").val(precio);
            $("#edit-stock").val(stock);
            $("#modal-editar, #modal-overlay").fadeIn();
        }

        function cerrarModalEditar() {
            $("#modal-editar, #modal-overlay").fadeOut();
        }

        function guardarNuevoProducto() {
            let nombre = $("#add-nombre").val();
            let precio = $("#add-precio").val();
            let stock = $("#add-stock").val();

            $.ajax({
                url: "http://sandwich2024.test/api/productos",
                type: "POST",
                headers: { "X-CSRF-TOKEN": "{{ csrf_token() }}" },
                data: { nombre, precio, stock },
                success: function(response) {
                    location.reload();
                },
                error: function(xhr) {
                    alert("Error al agregar el producto.");
                }
            });
        }

        function guardarEdicionProducto() {
            let id = $("#edit-id").val();
            let nombre = $("#edit-nombre").val();
            let precio = $("#edit-precio").val();
            let stock = $("#edit-stock").val();

            $.ajax({
                url: `http://sandwich2024.test/api/productos/${id}`,
                type: "PUT",
                headers: { "X-CSRF-TOKEN": "{{ csrf_token() }}" },
                data: { nombre, precio, stock },
                success: function(response) {
                    $(`#producto-${id} h3`).text(response.nombre);
                    $(`#producto-${id} p:eq(0)`).html(`<strong>Precio:</strong> $${parseFloat(response.precio).toFixed(2)}`);
                    $(`#producto-${id} p:eq(1)`).html(`<strong>Stock:</strong> ${response.stock}`);
                    cerrarModalEditar();
                    alert("Producto actualizado correctamente");
                },
                error: function(xhr) {
                    alert("Error al actualizar el producto.");
                }
            });
        }

        function eliminarProducto(id) {
            if (!confirm("¿Estás seguro de eliminar este producto?")) return;

            $.ajax({
                url: `http://sandwich2024.test/api/productos/${id}`,
                type: "DELETE",
                headers: { "X-CSRF-TOKEN": "{{ csrf_token() }}" },
                success: function() {
                    $(`#producto-${id}`).remove();
                    alert("Producto eliminado correctamente");
                },
                error: function() {
                    alert("Error al eliminar el producto.");
                }
            });
        }
    </script>

</body>
</html>
