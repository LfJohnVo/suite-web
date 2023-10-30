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
        Schema::create('reglas_evaluacion_organizacions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('evaluacion_organizacion_id');
            $table->float('rango_minimo', 8, 2);
            $table->float('rango_maximo', 8, 2);
            $table->string('nombre_regla');
            $table->float('valor_regla', 8, 2);
            $table->foreign('evaluacion_organizacion_id')->references('id')->on('evaluacion_organizacions')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reglas_evaluacion_organizacions');
    }
};
