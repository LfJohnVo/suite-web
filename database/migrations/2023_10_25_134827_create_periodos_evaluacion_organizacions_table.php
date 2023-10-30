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
        Schema::create('periodos_evaluacion_organizacions', function (Blueprint $table) {
            $table->id();
            $table->string('tipo');
            $table->boolean('objetivos_y_competencias')->default(true);
            $table->unsignedBigInteger('evaluacion_organizacion_id');
            $table->string('periodo_1');
            $table->date('fecha_inicio_p1');
            $table->date('fecha_fin_p1');
            $table->string('periodo_2');
            $table->date('fecha_inicio_p2');
            $table->date('fecha_fin_p2');
            $table->string('periodo_3');
            $table->date('fecha_inicio_p3');
            $table->date('fecha_fin_p3');
            $table->string('periodo_4');
            $table->date('fecha_inicio_p4');
            $table->date('fecha_fin_p4');
            $table->string('periodo_competencias_1')->nullable();
            $table->date('fecha_inicio_competencias_p1')->nullable();
            $table->date('fecha_fin_competencias_p1')->nullable();
            $table->string('periodo_competencias_2')->nullable();
            $table->date('fecha_inicio_competencias_p2')->nullable();
            $table->date('fecha_fin_competencias_p2')->nullable();
            $table->string('periodo_competencias_3')->nullable();
            $table->date('fecha_inicio_competencias_p3')->nullable();
            $table->date('fecha_fin_competencias_p3')->nullable();
            $table->string('periodo_competencias_4')->nullable();
            $table->date('fecha_inicio_competencias_p4')->nullable();
            $table->date('fecha_fin_competencias_p4')->nullable();
            $table->timestamps();
            $table->foreign('evaluacion_organizacion_id')->references('id')->on('evaluacion_organizacions')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('periodos_evaluacion_organizacions');
    }
};
