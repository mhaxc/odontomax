<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $fillable=['cpf','nome','endereco','telefone','aniversario','email','obs'];


    public function consulta()
    {
     return $this->hasMany(Consulta::class);
    }

}
