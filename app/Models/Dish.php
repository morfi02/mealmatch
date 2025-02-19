<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    use HasFactory;

    protected $fillable = ['chef_id', 'name', 'description', 'price', 'image_url'];

    public function chef()
    {
        return $this->belongsTo(User::class, 'chef_id');
    }
}
