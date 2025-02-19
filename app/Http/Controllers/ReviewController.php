<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function store(Request $request, $dishId)
    {
        $request->validate([
            'rating' => 'required|integer|between:1,5',
            'comment' => 'nullable|string|max:1000',
        ]);

        $dish = Dish::findOrFail($dishId);

        Review::create([
            'dish_id' => $dish->id,
            'user_id' => Auth::id(),
            'rating' => $request->rating,
            'comment' => $request->comment,
        ]);

        return redirect()->route('dishes.show', $dishId);
    }
}

