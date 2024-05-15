<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('model_name');
            $table->decimal('price', 32, 2); // Добавлено поле для цены автомобиля
            $table->string('category', 50);
            $table->string('path_to_file', 150)->nullable()->unique(); // Добавлено поле для категории автомобиля
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
