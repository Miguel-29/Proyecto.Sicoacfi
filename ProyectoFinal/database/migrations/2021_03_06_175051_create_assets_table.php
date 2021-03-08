<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->string('trademark',45);
            $table->string('color',30);
            $table->string('reference',20);
            $table->float('serial_number',45);
            $table->string('date_admission',45);
            $table->string('maintenance',45);
            $table->enum('category',['tecnologia','muebles']);

            $table->bigInteger('idenvironment')->unsigned()->nullable();
            $table->foreign('idenvironment')->references('id')->on('environments');
            $table->bigInteger('idteacher')->unsigned()->nullable();
            $table->foreign('idteacher')->references('id')->on('teachers');

            $table->softDeletes();
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
        Schema::dropIfExists('assets');
    }
}
