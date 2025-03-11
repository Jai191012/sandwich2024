<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SANDWICH ARTESANOS | Inicio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.12/dist/full.css" rel="stylesheet" />
</head>
<body class="bg-gray-100" style="background-image: url('/imagenes/fondo.jpg'); background-size: cover; background-position: center; background-attachment: fixed;">
    
    <!-- Barra de navegación -->
    <nav class="navbar bg-base-200 px-4 shadow-md">
        <div class="flex-1">
            <a href="{{ url('/') }}" class="btn btn-ghost text-xl flex items-center">
                <img src="https://images.fineartamerica.com/images/artworkimages/mediumlarge/3/hand-drawn-of-baguette-sandwich-on-white-background-iam-nee.jpg" 
                     alt="Logo" 
                     class="w-16 h-16 mr-2 rounded-full">
                <span>Sandwich Artesanos</span>
            </a>
        </div>
    </nav>
    
    

    <!-- Héroe centrado -->
    <section class="hero min-h-screen bg-base-100" style="background-image: url('https://static.vecteezy.com/system/resources/previews/007/934/064/original/sandwich-cartoon-flat-design-illustration-vector.jpg'); background-repeat: no-repeat; background-position: center;">
        <div class="hero-content text-center">
            <div class="max-w-md">
                <h1 class="text-5xl font-bold text-black">Bienvenido a Sandwich Artesanos</h1>
                <p class="py-6 text- shadow-xl">Gestiona tus pedidos, clientes y entregas de forma rápida y eficiente.</p>
                <a href="{{ route('login') }}" class="btn btn-primary">INICIO</a>
            </div>
        </div>
    </section>

    <!-- Pie de página -->
    <footer class="footer footer-center p-4 bg-base-200 text-base-content">
        <div>
            <img src="https://images.fineartamerica.com/images/artworkimages/mediumlarge/3/hand-drawn-of-baguette-sandwich-on-white-background-iam-nee.jpg"" alt="Logo" class="w-20 h-20 mx-auto">
            <p class="font-bold">Sandwich Artesanos - Soluciones para eventos y el dia a dia</p>
            <div class="grid grid-flow-col gap-4">
                <a href="https://facebook.com" target="_blank" class="text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M22.676 0H1.326C.593 0 0 .593 0 1.326v21.348C0 23.407.593 24 1.326 24h11.494v-9.294H9.692V11.31h3.128V8.413c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.312h3.587l-.467 3.396h-3.12V24h6.116C23.407 24 24 23.407 24 22.674V1.326C24 .593 23.407 0 22.676 0z"/></svg>
                </a>
                <a href="https://twitter.com" target="_blank" class="text-blue-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557a9.825 9.825 0 0 1-2.828.775A4.932 4.932 0 0 0 23.337 3.1a9.864 9.864 0 0 1-3.127 1.195 4.916 4.916 0 0 0-8.38 4.482A13.95 13.95 0 0 1 1.671 3.149 4.916 4.916 0 0 0 3.195 9.723a4.897 4.897 0 0 1-2.229-.616v.062a4.917 4.917 0 0 0 3.946 4.827 4.897 4.897 0 0 1-2.224.085 4.919 4.919 0 0 0 4.588 3.41A9.867 9.867 0 0 1 .96 19.54 13.9 13.9 0 0 0 7.548 21c9.142 0 14.307-7.721 13.995-14.646A10.02 10.02 0 0 0 24 4.557z"/></svg>
                </a>
                <a href="https://instagram.com" target="_blank" class="text-pink-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.17.056 1.97.248 2.427.415a4.92 4.92 0 0 1 1.774 1.153 4.92 4.92 0 0 1 1.153 1.774c.167.457.359 1.257.415 2.427.058 1.266.07 1.646.07 4.85s-.012 3.584-.07 4.85c-.056 1.17-.248 1.97-.415 2.427a4.918 4.918 0 0 1-1.153 1.774 4.918 4.918 0 0 1-1.774 1.153c-.457.167-1.257.359-2.427.415-1.266.058-1.646.07-4.85.07s-3.584-.012-4.85-.07c-1.17-.056-1.97-.248-2.427-.415a4.92 4.92 0 0 1-1.774-1.153A4.92 4.92 0 0 1 5.505 2.648c.457-.167 1.257-.359 2.427-.415C8.416 2.175 8.796 2.163 12 2.163z"/></svg>
                </a>
            </div>
            <p>&copy; 2025 Sandwich Artesanos. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>
