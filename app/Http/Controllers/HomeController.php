<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    private $pacientes;
    public function __construct(Paciente $pacientes)
    {

        $contar = Paciente::all()->count($pacientes);
            return $contar;
        $this->middleware('auth');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }




}
