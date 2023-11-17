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
        Schema::create('evaluadores_competencias_evaluacion_organizacions_pivot', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('evaluacion_organizacion_id');
            $table->unsignedBigInteger('evaluado_id');
            $table->foreign('evaluacion_organizacion_id')->references('id')->on('evaluacion_organizacions')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('evaluado_id')->references('id')->on('empleados')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluadores_competencias_evaluacion_organizacions_pivot');
    }
};
