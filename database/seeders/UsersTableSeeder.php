<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run() {
        \App\Models\User::create([
            'name' => 'Usuario Test',
            'email' => 'user@test.com',
            'password' => bcrypt('password123'),
        ]);
    
        \App\Models\Cook::create([
            'name' => 'Chef María',
            'email' => 'maria@test.com',
            'password' => bcrypt('password123'),
            'is_verified' => true,
            'address' => 'Calle Falsa 123, Ciudad'
        ]);
    }
}
