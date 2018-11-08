<?php
/**
 * Created by PhpStorm.
 * User: maxwelsilva
 * Date: 08/11/2018
 * Time: 12:15
 */

namespace providers;
use App\Models\Paciente;
use JeroenNoten\LaravelAdminLte\ServiceProvider;
use listeners\Decrements;
use listeners\Increments;
use providers\EventServiceProvider as SeviceProvider;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        Paciente::class =>[
            Increments::class,
        ],
        Paciente::class =>[
         Decrements::class,

        ]
    ];
}