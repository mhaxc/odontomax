<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Convenio extends Model
{
    protected $fillable =

        [ 'razao_social','codigo','nome','data'];

    public function consulta()
    {
        return $this->hasMany(Consulta::class);
    }
}
