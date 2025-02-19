<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ChefController;
use App\Http\Controllers\DishController;
use App\Http\Controllers\ReviewController;

Route::post('dishes/{dish}/reviews', [ReviewController::class, 'store'])->name('reviews.store');

// chef
Route::get('/cocinero/{id}', [ChefController::class, 'show'])->name('chef.profile');
// buscador
Route::get('/buscar', [SearchController::class, 'index'])->name('search');
// menu
Route::resource('chef/dishes', DishController::class);



Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/buscar', function () {
    return view('search');
})->name('search');

Route::get('/registro', function () {
    return view('auth.register');
})->name('register');

