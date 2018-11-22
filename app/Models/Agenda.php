<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $fillable = ['data','horario_inicio','horario_final','nome','consultorio_id','dentista_id'];


    public function consultorios()
    {
        return $this->belongsTo(Consultorio::class);
    }

    public function dentistas()
    {
        return $this->belongsTo(Dentista::class);
    }
    protected $dates = [
        'created_at',
        'updated_at',
        'data'
    ];

    protected $dateFormat = 'Y-m-d H:i:s';

}
