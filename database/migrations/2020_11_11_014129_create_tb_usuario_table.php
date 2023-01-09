<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_usuario', function (Blueprint $table) {
            $table->bigIncrements('id_usuario');
            $table->string('nombre',45);
            $table->string('app',45);
            $table->string('apm',45);
            $table->string('email',45);
            $table->integer('tipo_usuario');
            $table->string('tel',18);
            $table->string('pass',45);
            $table->text('img');
            $table->date('fn');
            
        
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
        Schema::dropIfExists('tb_usuarios');
    }
}
