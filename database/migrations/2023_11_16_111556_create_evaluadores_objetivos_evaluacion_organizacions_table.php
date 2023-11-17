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
        Schema::create('evaluadores_objetivos_evaluacion_organizacions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('evaluadores_objetivos_pivot_id');
            $table->unsignedBigInteger('evaluador_id');
            $table->float('peso_evaluador', 8, 2);
            $table->foreign('evaluadores_objetivos_pivot_id')->references('id')->on('evaluadores_objetivos_evaluacion_organizacions_pivot')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('evaluador_id')->references('id')->on('empleados')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluadores_objetivos_evaluacion_organizacions');
    }
};
