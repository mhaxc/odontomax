<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndicadoresTable extends Migration
{



    public function up()
    {
        Schema::create('indicadores', function (Blueprint $table) {

            $table->integer('pacientes');
            $table->integer('dentistas');


        });
    }


    public function down()
    {
        Schema::dropIfExists('indicadores');
    }
}
