<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dish;

class DishController extends Controller
{
    // Mostrar todos los platos del cocinero
    public function index()
    {
        $dishes = Dish::where('chef_id', auth()->id())->get(); // Mostrar platos solo del cocinero autenticado
        return view('chef.dishes.index', compact('dishes'));
    }

    // Mostrar el formulario para crear un plato
    public function create()
    {
        return view('chef.dishes.create');
    }

    // Guardar un nuevo plato
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image_url' => 'nullable|url'
        ]);

        Dish::create([
            'chef_id' => auth()->id(),
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image_url' => $request->image_url
        ]);

        return redirect()->route('chef.dishes.index')->with('success', 'Plato agregado con éxito');
    }

    // Mostrar el formulario para editar un plato
    public function edit(Dish $dish)
    {
        $this->authorize('update', $dish); // Asegurarse de que el cocinero pueda editar su plato
        return view('chef.dishes.edit', compact('dish'));
    }

    // Actualizar un plato
    public function update(Request $request, Dish $dish)
    {
        $this->authorize('update', $dish);

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image_url' => 'nullable|url'
        ]);

        $dish->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image_url' => $request->image_url
        ]);

        return redirect()->route('chef.dishes.index')->with('success', 'Plato actualizado con éxito');
    }

    // Eliminar un plato
    public function destroy(Dish $dish)
    {
        $this->authorize('delete', $dish);
        $dish->delete();
        return redirect()->route('chef.dishes.index')->with('success', 'Plato eliminado con éxito');
    }
}
