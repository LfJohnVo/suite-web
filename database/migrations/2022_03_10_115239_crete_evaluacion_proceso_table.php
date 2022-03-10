<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreteEvaluacionProcesoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluacion_procesos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('proceso_evaluar')->nullable();
            $table->string('nivel_riesgo')->nullable();
            $table->string('direccion')->nullable();
            $table->string('servicio')->nullable();
            $table->integer('operacional')->nullable();
            $table->integer('cumplimiento')->nullable();
            $table->integer('legal')->nullable();
            $table->integer('reputacional')->nullable();
            $table->string('nivel_impacto')->nullable();
            $table->string('activos_asociados')->nullable();
            $table->string('promedio_activos')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
