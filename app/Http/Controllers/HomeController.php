<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /* private $pacientes;*/


    public function __construct()
    {
        $this->middleware('auth');
        /*$conta_pacientes = Paciente::all()->count($pacientes);
        return $conta_pacientes;*/

    }


    public function index()
    {
        $contagens = \DB::table('indicadores')->select('dentistas','pacientes')->get();

        return view('home',compact('contagens'));
    }






}
