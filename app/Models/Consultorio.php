<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consultorio extends Model
{
    protected $fillable= ['nome','cnpj','endereco','bairro','telefone'];
}
