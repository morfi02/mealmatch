<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Suponiendo que los cocineros son usuarios registrados

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = User::where('role', 'cocinero'); // Solo buscamos cocineros

        if ($request->has('location')) {
            $query->where('location', 'LIKE', '%' . $request->location . '%');
        }
        if ($request->has('category')) {
            $query->where('category', $request->category);
        }
        if ($request->has('rating')) {
            $query->where('rating', '>=', $request->rating);
        }

        $cocineros = $query->paginate(10);

        return view('search', compact('cocineros'));
    }
    public function search(Request $request)
{
    // Aquí puedes obtener los cocineros según los filtros
    $cocineros = Cocinero::all(); // O tu lógica de consulta según los filtros

    return view('search', compact('cocineros'));
}

}
