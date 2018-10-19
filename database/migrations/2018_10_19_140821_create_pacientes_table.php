<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->increments('id_paciente');
            $table->foreign('id_convenio')->references('id')->on('convenio');
            $table->foreign('id_laudo')->references('id')->on('laudo');
            $table->foreign('id_prontuario')->references('id')->on('prontuario');
            $table->integer('cpf')->unique();
            $table->integer('rg')->unique();
            $table->string('nome_pai');
            $table->string('nome_mae');
            $table->string('carteira');
            $table->string('endereco');
            $table->string('telefone');
            $table->string('email');
            $table->string('senha');
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
        Schema::dropIfExists('pacientes');
    }
}
