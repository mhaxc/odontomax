<?php


namespace events;
use App\Models\Paciente;
use Illuminate\Queue\SerializesModels;

class Diminuir
{
    use SerializesModels;

    public $paciente;


    public function __construct(Paciente $paciente)
    {
        $this->paciente = $paciente;
    }
}