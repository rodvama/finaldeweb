<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaestrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maestros', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nomina')->unique();
            $table->string('nombre');
            $table->string('telefono')->nullable();
            $table->string('email')->nullable();
            $table->integer('numCursos')->comment('Numero de cursos que programados este semestre')->nullable();
            $table->timestamps();
        });

        $values = array(
            array('nomina' => 'L1111', 'nombre' => 'Lic. Carlos Saucedo', 'telefono' => 8182834545, 'email' => 'carlosS@itesm.mx'),
            array('nomina' => 'L2222', 'nombre' => 'Lic. Laura Garza', 'telefono' => 81813455453, 'email' => 'robertoGarza@itesm.mx'),
            array('nomina' => 'L3333', 'nombre' => 'Lic. Jose Lozano', 'telefono'=> 83843843, 'email' => 'joseL@itesm.mx')
        );

        DB::table('maestros')->insert($values);  
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maestros');
    }
}