<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teste extends Model
{
    protected $fillable = ['nome','descricao','data','hora_inicio','hora_final'];
}
