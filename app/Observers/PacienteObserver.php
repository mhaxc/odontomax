<?php

namespace App\Observers;

use App\Models\Paciente;

class PacienteObserver
{
    public function created(Paciente $paciente)
    {
        \DB::table('indicadores')->increment('pacientes');

    }

    public function deleted(Paciente $pacientes)
    {
        \DB::table('indicadores')->decrement('pacientes');

    }
}
