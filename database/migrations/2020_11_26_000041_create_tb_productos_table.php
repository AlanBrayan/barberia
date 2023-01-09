<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_productos', function (Blueprint $table) {
            $table->bigIncrements('id_producto');
            $table->string('nombre_producto');
            $table->float('no_existencias',10,5);
            $table->float('precio',10,5);
            $table->string('descripcion');
            $table->string('img');
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
        Schema::dropIfExists('tb_productos');
    }
}
