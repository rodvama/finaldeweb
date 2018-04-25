<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('id_maestro');
            $table->integer('id_curso')->unsigned();
            $table->timestamps();

            $table->foreign('id_maestro')
                  ->references('nomina')->on('maestros')
                  ->onDelete('cascade');

            $table->foreign('id_curso')->references('id_cursos')->on('cursos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participas');
    }
}
