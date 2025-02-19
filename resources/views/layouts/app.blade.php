<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'MealMatch')</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-900">

    <!-- Navbar -->
    <nav class="bg-white shadow-md p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ route('home') }}" class="text-3xl font-extrabold text-green-600">🍽️ MealMatch</a>
            <div>
                <a href="{{ route('search') }}" class="text-gray-700 mx-4 hover:text-green-500">Buscar</a>
                <a href="{{ route('register') }}" class="bg-green-500 text-white px-5 py-2 rounded-full shadow-md hover:bg-green-600">
                    Regístrate 🍳
                </a>
            </div>
        </div>
    </nav>

    <!-- Contenido de cada página -->
    <div class="container mx-auto p-6">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="bg-white text-center p-6 shadow-md mt-10">
        <p class="text-gray-600">&copy; 2025 MealMatch - Hecho con ❤️ para los amantes de la comida casera</p>
    </footer>

</body>
</html>
