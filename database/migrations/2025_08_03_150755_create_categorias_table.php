<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

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

        // Insertar datos iniciales
        DB::table('categorias')->insert([
            ['codigo' => 'C1', 'nombre' => 'Emergencia inmediata', 'color' => 'bg-danger', 'orden' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['codigo' => 'C2', 'nombre' => 'Emergencia urgente', 'color' => 'bg-orange', 'orden' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['codigo' => 'C3', 'nombre' => 'Emergencia moderada', 'color' => 'bg-warning', 'orden' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['codigo' => 'C4', 'nombre' => 'Emergencia leve', 'color' => 'bg-success', 'orden' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['codigo' => 'C5', 'nombre' => 'No urgente', 'color' => 'bg-primary', 'orden' => 5, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categorias');
    }
};
