<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price', 10, 3);
            $table->json('rating')->nullable(); // Use float for rating
            $table->string('color')->nullable();
            $table->string('image')->nullable();
            $table->date('date')->nullable();
            $table->string('setbg')->nullable();
            $table->json('variant_color')->nullable(); // Store multiple colors as JSON
            $table->string('active_color')->nullable(); // Store the active color
            $table->string('category')->nullable(); // Optional category field
            $table->string('data_color')->nullable();               
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
