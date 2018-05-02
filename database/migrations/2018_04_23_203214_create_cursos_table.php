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
            $table->integer('id_materia')->unsigned();//De aqui puedo traer horas de laboratorio
            $table->string('hora');
            $table->integer('id_salon')->unsigned();
            $table->boolean('ingles');
            $table->boolean('honors');
            $table->timestamps();

            $table->foreign('id_materia')->references('id')->on('materias')->onDelete('cascade');
            $table->foreign('id_salon')->references('id')->on('salones')->onDelete('cascade');  
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