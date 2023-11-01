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
        Schema::create('evaluacion_organizacions', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_evaluacion');
            $table->longText('descripcion')->nullable();
            $table->boolean('objetivos')->default(false)->nullable();
            $table->float('valor_objetivos')->default(0)->nullable();
            $table->boolean('competencias')->default(false)->nullable();
            $table->float('valor_competencias')->default(0)->nullable();
            $table->string('estado');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluacion_organizacions');
    }
};