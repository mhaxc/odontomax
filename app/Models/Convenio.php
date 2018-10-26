<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Convenio extends Model
{
    protected $fillable =

    [ 'nome','data','regiao'];

public function consulta()
{
    return $this->hasMany(Consulta::class);
}
}
