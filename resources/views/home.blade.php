@extends('layouts.app')

@section('title', 'Inicio - MealMatch')

@section('content')
<div class="text-center py-20">
    <h1 class="text-5xl font-extrabold text-gray-800 leading-tight">
        ¡Encuentra <span class="text-green-500">comida casera</span> cerca de ti!
    </h1>
    <p class="text-lg text-gray-600 mt-4">
        Descubre cocineros locales y prueba deliciosos platos hechos con amor ❤️.
    </p>

    <!-- Botones de acción -->
    <div class="mt-8 space-x-4">
        <a href="{{ route('search') }}" class="bg-green-500 text-white px-6 py-3 rounded-full text-lg font-semibold shadow-md hover:bg-green-600 transition">
            🔍 Buscar comida
        </a>
        <a href="{{ route('register') }}" class="bg-orange-500 text-white px-6 py-3 rounded-full text-lg font-semibold shadow-md hover:bg-orange-600 transition">
            🍳 Regístrate como cocinero
        </a>
    </div>

    <!-- Campo de búsqueda -->
    <div class="mt-12 max-w-lg mx-auto relative">
        <input type="text" placeholder="Introduce tu ubicación o código postal"
            class="w-full p-4 border border-gray-300 rounded-full shadow-lg focus:ring focus:ring-green-300">
        <button class="absolute right-4 top-3 bg-green-500 text-white px-4 py-2 rounded-full shadow-md hover:bg-green-600 transition">
            🔎
        </button>
    </div>
</div>

<!-- Sección de cocineros destacados -->
<div class="mt-16 text-center">
    <h2 class="text-3xl font-bold text-gray-800">🍲 Cocineros Destacados</h2>
    <p class="text-gray-600 mt-2">Prueba los platos mejor valorados por la comunidad.</p>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <img src="https://source.unsplash.com/300x200/?chef,food" class="rounded-lg" alt="Chef">
            <h3 class="text-xl font-semibold mt-4">María López</h3>
            <p class="text-gray-500">Especialista en cocina casera tradicional.</p>
            <a href="#" class="text-green-500 font-semibold mt-2 inline-block">Ver perfil →</a>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <img src="https://source.unsplash.com/300x200/?cooking,healthy" class="rounded-lg" alt="Chef">
            <h3 class="text-xl font-semibold mt-4">Carlos Fernández</h3>
            <p class="text-gray-500">Platos saludables y opciones veganas.</p>
            <a href="#" class="text-green-500 font-semibold mt-2 inline-block">Ver perfil →</a>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <img src="https://source.unsplash.com/300x200/?meal,chef" class="rounded-lg" alt="Chef">
            <h3 class="text-xl font-semibold mt-4">Ana García</h3>
            <p class="text-gray-500">Postres artesanales y dulces caseros.</p>
            <a href="#" class="text-green-500 font-semibold mt-2 inline-block">Ver perfil →</a>
        </div>
    </div>
</div>
@endsection
