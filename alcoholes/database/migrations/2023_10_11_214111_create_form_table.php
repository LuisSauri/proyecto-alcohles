<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('form', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('fecha_rev');

            $table->unsignedBigInteger('idMunicipio');
            $table->foreign('idMunicipio')->references('idMunicipio')->on('municipios');

            $table->unsignedBigInteger('idLocalidad')->nullable();
            $table->foreign('idLocalidad')->references('idLocalidad')->on('poblaciones');

            $table->string('colonia');
            $table->string('calle');
            $table->string('cruzamiento');
            $table->bigInteger('clave');
            $table->string('nombreLocal');

            $table->unsignedBigInteger('idGiro')->nullable();
            $table->foreign('idGiro')->references('idGiro')->on('giros');

            $table->date('fecha_mov');
            $table->string('nombreContribuyente');
            $table->string('rfc');
            $table->string('licencia');
            $table->string('horario');
            $table->bigInteger('fol_ant');
            $table->string('arrendamiento');
            $table->bigInteger('telefono');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form');
    }
};
