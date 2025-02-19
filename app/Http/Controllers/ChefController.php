<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Suponiendo que los cocineros son usuarios registrados
use App\Models\Dish; // Modelo para los platos del menú

class ChefController extends Controller
{
    public function show($id)
    {
        $cocinero = User::where('id', $id)->where('role', 'cocinero')->firstOrFail();
        $platos = Dish::where('chef_id', $id)->get();

        return view('chef.profile', compact('cocinero', 'platos'));
    }
}
