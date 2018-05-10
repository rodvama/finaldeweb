<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salones', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('numSalon')->unique()->comment('Numero de salon');
            $table->integer('capacidad');
            $table->string('admin')->comment('Que departamento lo administra');
            $table->timestamps();
        });

         $values = array(
            array('numSalon' => 'A4-245', 'capacidad' => 30, 'admin' => 'CS'),
            array('numSalon' => 'A6-202', 'capacidad' => 20, 'admin' => 'CS'),
            array('numSalon' => 'A2-103', 'capacidad' => 33, 'admin' => 'Escolar'),
            array('numSalon' => 'A4-305', 'capacidad' => 45, 'admin' => 'Escolar'),
            array('numSalon' => 'A2-204', 'capacidad' => 35, 'admin' => 'CS'),
            array('numSalon' => 'A1-304', 'capacidad' => 45, 'admin' => 'Escolar')
        );

        DB::table('salones')->insert($values);  
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salones');
    }
}