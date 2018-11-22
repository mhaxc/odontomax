<?php

namespace App\Observers;

use App\Models\Dentista;

class DentistaObserver
{
    public function created(Dentista $dentista)
    {

           \DB::table('indicadores')->increment('dentistas');
    }

    public function deleted(Dentista $dentista)
    {
        \DB::table('indicadores')->decrement('dentistas');

    }
}
