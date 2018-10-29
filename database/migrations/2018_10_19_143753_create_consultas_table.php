<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultas', function (Blueprint $table) {
            $table->increments('id');
            $table->date('data');
            $table->time('horario');
            $table->string('tipo');
            $table->integer('convenio_id')->unsigned();
            $table->integer('dentista_id')->unsigned();
            $table->integer('paciente_id')->unsigned();
            $table->foreign('convenio_id')->references('id')->on('convenios');
            $table->foreign('dentista_id')->references('id')->on('dentistas');
            $table->foreign('paciente_id')->references('id')->on('pacientes');
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
        Schema::dropIfExists('consultas');
    }
}
