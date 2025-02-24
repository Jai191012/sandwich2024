<!DOCTYPE html>
<html lang="en"
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" conten="ie=edge"
         <title> @yield('titulo', 'sandwich2024') </title>
         @vite('resources/css/app.css')     
    </head>
    <body> 
        <header>
            

            @include('layouts.navigation')

        </header>

        <main>

            @yield('contenido',)

        </main>    

        <footer>

            @include('layoust.footer')

        </footer> 

</body>
</html>
