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
            $table->string('product_id')->primary();
            $table->string('name');
            $table->decimal('calorias')->nullable();
            $table->decimal('grasa_Saturada')->nullable();
            $table->decimal('colesterol')->nullable();
            $table->decimal('grasa_Poliinsaturada')->nullable();
            $table->decimal('grasa_Monoinsaturada')->nullable();
            $table->decimal('grasa_trans')->nullable();
            $table->decimal('Fibra')->nullable();
            $table->decimal('proteinas')->nullable();
            $table->timestamps();
            $table->foreignId('category_id')->constraint()->onDelete('cascade');
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
