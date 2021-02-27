<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activos', function (Blueprint $table) {
            $table->id();
            $table->string('marca',45);
            $table->string('color',30);
            $table->string('referencia',20);
            $table->string('numeroSerial',45);
            $table->string('fechaIngreso',45);
            $table->string('mantenimiento',45);
            $table->enum('categoria',['tecnologia','muebles']);

            $table->bigInteger('idAula')->unsigned()->nullable();
            $table->foreign('idAula')->references('id')->on('ambientes');
            $table->bigInteger('idProfesor')->unsigned()->nullable();
            $table->foreign('idProfesor')->references('id')->on('profesores');

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
        Schema::dropIfExists('activos');
    }
}
