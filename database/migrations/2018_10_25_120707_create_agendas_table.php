<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendas', function (Blueprint $table) {
            $table->increments('id');
            $table->date('data');
            $table->time('horario');
            $table->string('nome');
            $table->integer('consultorio_id')->unsigned();
            $table->integer('dentista_id')->unsigned();
            $table->foreign('dentista_id')->references('id')->on('dentistas');
            $table->foreign('consultorio_id')->references('id')->on('consultorios');
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
        Schema::dropIfExists('agendas');

    }
}
