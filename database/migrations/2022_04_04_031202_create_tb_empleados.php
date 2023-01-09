<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbEmpleados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_empleados', function (Blueprint $table) {
            $table->bigIncrements('id_empleado');
            $table->string('nombre',45);
            $table->string('app',45);
            $table->string('apm',45);
            $table->string('tel',18);
            $table->text('img');
            $table->date('fn');
            $table->string('especialidad');
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
        Schema::dropIfExists('tb_empleados');
    }
}
