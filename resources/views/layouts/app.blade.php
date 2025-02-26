<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo', 'sandwich2024')</title>
    @vite('resources/css/app.css')     
</head>
<body> 
    <header>
        {{-- Barra de navegación --}}
        @include('layouts.navegacion')
    </header>

    <main>
        @yield('Contenido')
    </main>    

    <footer>
        @include('layouts.footer')        
    </footer> 
</body>
</html>
