<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnEmailEnvResolucionAprobadaToQuejasClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('quejas_clientes', function (Blueprint $table) {
            $table->boolean('email_env_resolucion_aprobada')->default(false);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('quejas_clientes', function (Blueprint $table) {
            //
        });
    }
}
