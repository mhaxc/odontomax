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
        $conta_pacientes = Paciente::all()->count();
        return view('home',compact('pacientes','conta_pacientes'));
    }




}
