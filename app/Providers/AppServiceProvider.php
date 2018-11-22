<?php

namespace App\Providers;

use App\Models\Consulta;
use App\Models\Dentista;
use App\Models\Paciente;
use App\Observers\ConsultaObserver;
use App\Observers\DentistaObserver;
use App\Observers\PacienteObserver;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
         Paciente::observe(PacienteObserver::class);
         Dentista::observe(DentistaObserver::class);
         Consulta::observe(ConsultaObserver::class);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
