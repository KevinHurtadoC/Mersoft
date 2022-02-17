<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('proveedores', function (Blueprint $table) {
            $table->id();
            $table->String('Nit_Empresa');
            $table->String('Nombre');
            $table->String('Apellido');
            $table->String('Empresa');
            $table->String('Categoria');
            $table->String('Dirreccion');
            $table->String('Telefono');
            $table->String('Correo');
            
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
        //
    }
};
