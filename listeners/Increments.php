<?php
/**
 * Created by PhpStorm.
 * User: maxwelsilva
 * Date: 08/11/2018
 * Time: 11:28
 */

namespace listeners;




use events\ContarAdd;


class Increments
{
    public function handle(ContarAdd $event)
    {
        $paciente = $event->paciente;

        $paciente->id++;
        $paciente->save();
    }
}