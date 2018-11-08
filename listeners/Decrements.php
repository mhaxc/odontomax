<?php
/**
 * Created by PhpStorm.
 * User: maxwelsilva
 * Date: 08/11/2018
 * Time: 11:28
 */

namespace listeners;



use events\ContarAdd;

class Decrements
{
    public function handle(ContarAdd $event)
    {
        $paciente = $event->paciente;
        if ($paciente > 0){
        $paciente->id--;
        $paciente->save();
    }

    }
}