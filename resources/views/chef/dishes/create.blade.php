@extends('layouts.app')

@section('title', 'Agregar Plato')

@section('content')
<div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-3xl font-bold mb-4">Agregar Nuevo Plato</h1>

    <form action="{{ route('chef.dishes.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-lg font-semibold">Nombre del Plato</label>
            <input type="text" id="name" name="name" class="w-full p-3 border rounded-md" required>
        </div>
        <div class="mb-4">
            <label for="description" class="block text-lg font-semibold">Descripción</label>
            <textarea id="description" name="description" class="w-full p-3 border rounded-md" required></textarea>
        </div>
        <div class="mb-4">
            <label for="price" class="block text-lg font-semibold">Precio</label>
            <input type="number" id="price" name="price" class="w-full p-3 border rounded-md" required>
        </div>
        <div class="mb-4">
        <label for="image">Imagen del plato</label>
        <input type="file" name="image">
        </div>

        <button type="submit" class="bg-green-500 text-white px-6 py-3 rounded-md">Guardar Plato</button>
    </form>
</div>
<h2>Reseñas</h2>
@foreach($dish->reviews as $review)
    <div>
        <strong>{{ $review->user->name }} ({{ $review->rating }} estrellas)</strong>
        <p>{{ $review->comment }}</p>
    </div>
@endforeach

@endsection
