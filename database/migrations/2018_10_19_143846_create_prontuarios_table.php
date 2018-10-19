<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProntuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prontuarios', function (Blueprint $table) {
            $table->increments('id_prontuario');
            $table->string('id_paciente');
            $table->string('id_medicamento');
            $table->string('posologia');
            $table->dateTime('inicio_med');
            $table->dateTime('final_med');
            $table->string('id_exame');
            $table->date('data_exame');
            $table->string('resultado');
            $table->string('observacao');
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
        Schema::dropIfExists('prontuarios');
    }
}
