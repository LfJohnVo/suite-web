<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMatrizIdToMatrizOctaveContenedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('matriz_octave_contenedores', function (Blueprint $table) {
            $table->unsignedBigInteger('matriz_id')->nullable();
            $table->foreign('matriz_id')->references('id')->on('analisis_de_riesgo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('matriz_octave_contenedores', function (Blueprint $table) {
            //
        });
    }
}
