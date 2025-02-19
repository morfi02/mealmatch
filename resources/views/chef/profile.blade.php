@extends('layouts.app')

@section('title', $cocinero->name)

@section('content')
<div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-md">
    <!-- Información del cocinero -->
    <div class="flex items-center space-x-6">
        <img src="https://source.unsplash.com/150x150/?chef" class="w-24 h-24 rounded-full" alt="Chef">
        <div>
            <h1 class="text-3xl font-bold">{{ $cocinero->name }}</h1>
            <p class="text-gray-600">{{ $cocinero->category }}</p>
            <p class="text-yellow-500">⭐ {{ $cocinero->rating }} / 5</p>
            <p class="text-gray-700 mt-2">📍 {{ $cocinero->location }}</p>
        </div>
    </div>

    <!-- Menú del cocinero -->
    <h2 class="text-2xl font-semibold mt-6">🍽️ Menú</h2>
    <div class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-6">
        @forelse ($platos as $plato)
            <div class="bg-gray-100 p-4 rounded-lg shadow">
                <img src="https://source.unsplash.com/300x200/?food" class="rounded-lg" alt="Plato">
                <h3 class="text-xl font-bold mt-2">{{ $plato->name }}</h3>
                <p class="text-gray-600">{{ $plato->description }}</p>
                <p class="text-green-600 font-semibold mt-1">💲 {{ number_format($plato->price, 2) }}</p>
            </div>
        @empty
            <p class="text-gray-500">Este cocinero aún no ha agregado platos.</p>
        @endforelse
    </div>

    <!-- Reseñas -->
    <h2 class="text-2xl font-semibold mt-6">📝 Reseñas</h2>
    <div class="mt-4">
        <p class="text-gray-500 italic">"Las reseñas de otros usuarios aparecerán aquí."</p>
    </div>
</div>
@endsection
