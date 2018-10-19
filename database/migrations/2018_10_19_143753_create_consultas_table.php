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
            $table->increments('id_consulta');
            $table->string('id');
            $table->date('data_consulta');
            $table->time('horario');
            $table->foreign('id_paciente')->references('id')->on('pacientes') ;
            $table->string('id_convenio');
            $table->foreign('id_medico')->references('id')->on('medicos');
            $table->string('id');
            $table->string('tipo');
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
