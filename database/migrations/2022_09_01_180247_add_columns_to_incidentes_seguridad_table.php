<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToIncidentesSeguridadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('incidentes_seguridad', function (Blueprint $table) {
            $table->unsignedInteger('categorias_incidentes_id')->nullable();
            $table->unsignedInteger('subcategoria_id')->nullable();
            $table->foreign('categorias_incidentes_id')->references('id')->on('subcategorias_incidentes');
            $table->foreign('subcategoria_id')->references('id')->on('categorias_incidentes');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('incidentes_seguridad', function (Blueprint $table) {
            //
        });
    }
}
