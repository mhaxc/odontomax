<?php
/**
 * Created by PhpStorm.
 * User: maxwelsilva
 * Date: 08/11/2018
 * Time: 11:06
 */

namespace events;
use App\Models\Paciente;
use Illuminate\Queue\SerializesModels;

class ContarAdd
{
    use SerializesModels;

    public $paciente;


    public function __construct(Paciente $paciente)
    {
        $this->paciente = $paciente;
    }
}