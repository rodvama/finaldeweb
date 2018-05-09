<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToGruposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('grupos', function (Blueprint $table) {
            $table->string('clave');
            $table->integer('numGrupo')->unique();
            $table->string('horario');
            $table->string('laboratorio')->nullable();
            $table->string('salon');
            $table->string('profesor');
            $table->integer('responsabilidad');
            $table->integer('ingles');
            $table->integer('honors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('grupos', function (Blueprint $table) {
            //
        });
    }
}
