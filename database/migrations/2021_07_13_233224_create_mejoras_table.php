<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMejorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mejoras', function (Blueprint $table) {
            $table->id();
            $table->string('mejora');
            $table->string('descripcion');

            $table->unsignedBigInteger('empleado_mejoro_id')->nullable();

            $table->foreign('empleado_mejoro_id')->references('id')->on('empleados');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mejoras');
    }
}
