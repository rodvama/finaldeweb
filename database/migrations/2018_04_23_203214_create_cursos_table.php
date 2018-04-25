<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_cursos')->comment('Numero de curso');
            $table->string('clave_materia');//De aqui puedo traer horas de laboratorio
            $table->string('id_hora');
            $table->string('id_salon');
            $table->boolean('ingles');
            $table->boolean('honors');
            $table->timestamps();

            $table->foreign('clave_materia')->references('clave')->on('materias')->onDelete('cascade');
            $table->foreign('id_hora')->references('hora')->on('horarios')->onDelete('cascade');
            $table->foreign('id_salon')->references('numSalon')->on('salones')->onDelete('cascade');  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos');
    }
}