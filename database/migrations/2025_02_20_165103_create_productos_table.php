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
        Schema::create('productos', function (Blueprint $table) {
            $table->id(); // Esto asegura un ID autoincremental
            $table->string('nombre', 100); // Definir longitud máxima
            $table->string('descripcion', 255)->nullable();
            $table->decimal('precio', 10, 2); // Definir precisión del precio
            $table->integer('stock')->unsigned(); // Asegurar que el stock no sea negativo
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
