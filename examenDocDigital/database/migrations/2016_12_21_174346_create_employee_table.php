<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Realizar cambios
        Schema::create('empleado', function(Blueprint $tabla){
            $tabla->increments("id");
            $tabla->integer('sucursal_id')->unsigned()->index();
            $tabla->string('nombre_empleado');
            $tabla->string('rfc');
            $tabla->string('puesto');

            $tabla->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         // Revertir los mismos cambios
        Schema::drop('empleado');
    }
}
