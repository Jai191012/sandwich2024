<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="en" data-theme="cupcake">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sandwich2024</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body class="min-h-screen flex flex-col">
    <!-- Barra de navegación -->
    <nav class="navbar bg-base-100 shadow-md">
        <div class="flex-1">
            <a class="btn btn-ghost text-xl">
                <img src="/logo.png" alt="Logo" class="w-8 h-8 mr-2"> Sandwich2024
            </a>
        </div>
        <div class="flex-none">
            <ul class="menu menu-horizontal p-0">
                <li><a href="#">Inicio</a></li>
                <li><a href="#productos">Productos</a></li>
                <li>
                    <details>
                        <summary>Más</summary>
                        <ul class="p-2 bg-base-100">
                            <li><a href="#sobre">Sobre Nosotros</a></li>
                            <li><a href="#contacto">Contacto</a></li>
                        </ul>
                    </details>
                </li>
            </ul>
        </div>
    </nav>
