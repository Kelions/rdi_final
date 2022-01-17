<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablaProyectoUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyecto_usuario', function (Blueprint $table) {
            $table->id("id_inv");            
            $table->date("union");
            $table->bigInteger("id_usuario")->references("id_user")->on("usuarios");
            $table->bigInteger("id_proyecto")->references("id_proyecto")->on("proyectos");
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
        Schema::dropIfExists('proyecto_usuario');
    }
}
