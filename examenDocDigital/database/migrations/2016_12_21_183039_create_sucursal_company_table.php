<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSucursalCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Realizar cambios
        Schema::create('sucursal_company', function(Blueprint $tabla){
            $tabla->increments("id");
            $tabla->integer('user_id')->unsigned()->index();
            $tabla->string('nombre_sucursal');
            $tabla->string('nombre_calle');
            $tabla->string('nombre_colonia');
            $tabla->integer('numero_exterior');
            $tabla->integer('numero_interior');
            $tabla->integer('codigo_postal');
            $tabla->string('ciudad');
            $tabla->string('pais');

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
        Schema::drop('sucursal_company');
    }
}
