@extends('layouts.app')

@section('title', 'Buscar Cocineros')

@section('content')
<div class="text-center">
    <h1 class="text-4xl font-bold text-gray-800">🔍 Encuentra tu comida casera favorita</h1>
    <p class="text-gray-600 mt-2">Filtra por ubicación, categoría o calificación.</p>
</div>

<!-- Formulario de búsqueda -->
<form method="GET" action="{{ route('search') }}" class="mt-6 bg-white p-6 rounded-lg shadow-md max-w-3xl mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <input type="text" name="location" placeholder="Ubicación o código postal" class="p-3 border rounded-md w-full">
        
        <select name="category" class="p-3 border rounded-md w-full">
            <option value="">Todas las categorías</option>
            <option value="vegano">Vegano</option>
            <option value="tradicional">Tradicional</option>
            <option value="keto">Keto</option>
            <option value="sin gluten">Sin Gluten</option>
        </select>

        <select name="rating" class="p-3 border rounded-md w-full">
            <option value="">Todas las calificaciones</option>
            <option value="4">4 estrellas o más</option>
            <option value="3">3 estrellas o más</option>
        </select>
    </div>
    <button type="submit" class="mt-4 bg-green-500 text-white px-6 py-3 rounded-md w-full shadow-md hover:bg-green-600">
        Buscar 🔎
    </button>
</form>

<!-- Resultados de la búsqueda -->
<div class="mt-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    @forelse ($cocineros as $cocinero)
        <div class="bg-white p-6 rounded-lg shadow-md">
            <img src="https://source.unsplash.com/300x200/?chef,food" class="rounded-lg" alt="Chef">
            <h3 class="text-xl font-semibold mt-4">{{ $cocinero->name }}</h3>
            <p class="text-gray-500">{{ $cocinero->category }}</p>
            <p class="text-gray-700 font-semibold">📍 {{ $cocinero->location }}</p>
            <p class="text-yellow-500">⭐ {{ $cocinero->rating }} / 5</p>
            <a href="#" class="text-green-500 font-semibold mt-2 inline-block">Ver perfil →</a>
        </div>
    @empty
        <p class="text-gray-500 text-center col-span-3">No se encontraron cocineros con esos filtros.</p>
    @endforelse
</div>

<!-- Paginación -->
<div class="mt-6">
    {{ $cocineros->links() }}
</div>
@endsection
