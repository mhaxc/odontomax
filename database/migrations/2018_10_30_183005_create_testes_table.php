<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testes', function (Blueprint $table) {

            $table->increments('id');
            $table->string('nome');
            $table->text('descricao')->nullable();
            $table->date('data');
            $table->time('hora_inicio');
            $table->time('hora_final');
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
        Schema::dropIfExists('testes');
    }
}
