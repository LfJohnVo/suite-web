<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnCompetenciaToEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('empleados', function (Blueprint $table) {
            $table->longText('resumen')->before('sede_id')->nullable();
            $table->string('expe_nombre')->before('resumen')->nullable();
            $table->string('expe_puesto')->before('expe_nombre')->nullable();
            $table->string('expe_periodo')->before('expe_puesto')->nullable();
            $table->longText('expe_descripcion')->before('expe_periodo')->nullable();
            $table->string('edu_institucion')->before('expe_descripcion')->nullable();
            $table->string('edu_periodo')->before('edu_institucion')->nullable();
            $table->string('edu_carrera')->before('edu_periodo')->nullable();
            $table->string('domicilio')->before('edu_carrera')->nullable();
            $table->string('idioma')->before('domicilio')->nullable();
            $table->string('idioma_nivel')->before('idioma')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('empleados', function (Blueprint $table) {
            //
        });
    }
}
