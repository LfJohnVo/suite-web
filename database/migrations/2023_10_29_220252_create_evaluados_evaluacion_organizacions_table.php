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
        Schema::create('evaluados_evaluacion_organizacions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('evaluacion_organizacion_id');
            $table->unsignedBigInteger('evaluado_id');
            $table->unsignedBigInteger('area_id');
            $table->unsignedBigInteger('grupo_id')->nullable();
            $table->timestamps();
            $table->foreign('evaluacion_organizacion_id')->references('id')->on('evaluacion_organizacions')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('evaluado_id')->references('id')->on('empleados')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('area_id')->references('id')->on('areas')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluados_evaluacion_organizacions');
    }
};
