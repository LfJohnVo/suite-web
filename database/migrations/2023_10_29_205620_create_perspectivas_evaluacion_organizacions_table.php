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
        Schema::create('perspectivas_evaluacion_organizacions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('evaluacion_organizacion_id');
            $table->string('nombre');
            $table->timestamps();
            $table->foreign('evaluacion_organizacion_id')->references('id')->on('evaluacion_organizacions')->constrained()->onDelete('cascade')->onUpdate('cascade');
            //No funciona de momento y por como desean implementarlo el ID no es la mejor opcion
            // $table->foreign('nombre')->references('nombre')->on('ev360_tipo_objetivos')->constrained()->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perspectivas_evaluacion_organizacions');
    }
};
