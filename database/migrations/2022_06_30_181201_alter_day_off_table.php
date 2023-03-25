<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterDayOffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('day_off', function (Blueprint $table) {
            $table->integer('afectados')->nullable();
            $table->integer('tipo_conteo')->nullable();
            $table->integer('inicio_conteo')->nullable();
            $table->integer('incremento_dias')->nullable();
            $table->integer('periodo_corte')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('day_off', function (Blueprint $table) {
            //
        });
    }
}
