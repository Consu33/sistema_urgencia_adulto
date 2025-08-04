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
        Schema::create('categorias', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');       // Ejemplo: C1, C2, etc.
            $table->string('nombre');       // Ejemplo: "Emergencia inmediata"
            $table->string('color');        // Ejemplo: "bg-danger"
            $table->integer('orden');       // Para orden en pantalla
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categorias');
    }
};
