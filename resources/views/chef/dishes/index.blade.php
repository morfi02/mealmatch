@extends('layouts.app')

@section('title', 'Menú del Cocinero')

@section('content')
<div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-3xl font-bold mb-4">📝 Mi Menú</h1>

    @if(session('success'))
        <div class="bg-green-500 text-white p-3 rounded-md mb-4">{{ session('success') }}</div>
    @endif

    <a href="{{ route('chef.dishes.create') }}" class="bg-blue-500 text-white px-6 py-3 rounded-md mb-4 inline-block">Agregar Nuevo Plato</a>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($dishes as $dish)
            <div class="bg-gray-100 p-4 rounded-lg shadow">
                <img src="{{ $dish->image_url }}" class="rounded-lg mb-4" alt="Plato">
                <h3 class="text-xl font-semibold">{{ $dish->name }}</h3>
                <p class="text-gray-600">{{ $dish->description }}</p>
                <p class="text-green-600 font-semibold mt-1">💲 {{ number_format($dish->price, 2) }}</p>
                <a href="{{ route('chef.dishes.edit', $dish) }}" class="text-blue-500 font-semibold mt-2 inline-block">Editar</a>
                <form action="{{ route('chef.dishes.destroy', $dish) }}" method="POST" class="inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500 font-semibold">Eliminar</button>
                </form>
            </div>
        @endforeach
    </div>
</div>
@endsection
