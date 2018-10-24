<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dentista extends Model
{
    protected $fillable =

        [ 'nome','telefone','email','endereco','sigla'];

    public function consulta()
    {
        return $this->belongsTo(Consulta::class);
    }
}
