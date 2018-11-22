<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    protected $fillable =['horario_inicio','horario_final','tipo','dentista_id','paciente_id','convenio_id'];


    public function dentistas()
{
         return $this->belongsTo(Dentista::class);
}

    public function pacientes()
    {
        return $this->belongsTo(Paciente::class);
    }

    public function convenios()
    {
        return $this->belongsTo(Convenio::class);
    }

    protected $dates = [
        'created_at',
        'updated_at',
        'data'
    ];

    protected $dateFormat = 'Y-m-d H:i:s';

}

