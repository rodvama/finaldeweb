<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMateriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materias', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('clave')->unique();
            $table->string('nombre');
            $table->string('laboratorio')->nullable()->comment('Horas de laboratorio');
            $table->timestamps();
        });
        
        $values = array(
            array('clave' => 'TC1020', 'nombre' => 'Base de Datos', 'laboratorio' => ''),
            array('clave' => 'TC1018', 'nombre' => 'Estructura de Datos', 'laboratorio' => ''),
            array('clave' => 'TC2008', 'nombre' => 'Sistemas Operativos', 'laboratorio' => ''),
            array('clave' => 'TC3041', 'nombre' => 'Base de datos avanzadas', 'laboratorio' => ''),
            array('clave' => 'EM1005', 'nombre' => 'Emprendimiento', 'laboratorio' => ''), 
            array('clave' => 'H1016', 'nombre' => 'Lengua extranjera', 'laboratorio' => '')
        );

        DB::table('materias')->insert($values);  
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materias');
    }
}