<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbCitas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_citas', function (Blueprint $table) {
            $table->bigIncrements('id_cita');
            $table->integer('id_usuario');
            $table->string('fecha');
            $table->integer('hora');
            $table->integer('id_servicio');
            $table->float('total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_citas');
    }
}
