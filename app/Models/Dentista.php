<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dentista extends Model
{
    protected $fillable =

        [ 'nome','telefone','email','endereco','crm'];

    public function consulta()
    {
        return $this->hasMany(Consulta::class);
    }
}
