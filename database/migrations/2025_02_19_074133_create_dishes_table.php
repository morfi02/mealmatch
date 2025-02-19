<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDishesTable extends Migration
{
    public function up()
    {
        Schema::create('dishes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('chef_id')->constrained('users')->onDelete('cascade'); // Relacionado con el cocinero
            $table->string('name');
            $table->text('description');
            $table->decimal('price', 8, 2);
            $table->string('image_url')->nullable(); // URL de la imagen del plato
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dishes');
    }
}
