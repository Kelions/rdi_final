<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablaRdi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rdi', function (Blueprint $table) {
            $table->id("id_rdi");
            $table->bigInteger('id_destinatario');
            $table->string('remitente',100);
            $table->string('tema',300);
            $table->string('especialidad',100);
            $table->date('fecha_infreso');
            $table->date('fecha_cierre');
            $table->string('contenido',1000);
            $table->char("prioridad",1);
            $table->char('estado',1);
            $table->char('tipo');

            $table->bigInteger('id_proyecto')->references("id_proyecto")->on("proyectos");
            $table->bigInteger('id_remitente')->references("id_user")->on("usuarios");

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
        Schema::dropIfExists('rdi');
    }
}
