<?php

namespace App\Http\Controllers;

use App\Models\Consulta;
use App\Models\Convenio;
use App\Models\Dentista;
use App\Models\Paciente;
use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $consultas = Consulta::latest()->paginate(10);

        return view('consulta.index',compact('consultas'));


    }

    /**
     * Show the form for creating a new resource.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dentistas = Dentista::all();
        $pacientes = Paciente::all();
        $convenios = Convenio::all();
        return view ('consulta.create ',compact('dentistas','pacientes','convenios'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Convenio $convenios )
    {
        $this->validate($request,[
            'data'=>'required',
            'horario'=>'required',
            'tipo'=>'required',

        ]);
        Consulta::create($request->all());

        return redirect(route('consulta.index'))->with('success','Marcado com sucesso  com Sucesso');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $consulta = Consulta::find($id);
        return view('consulta.show',compact('consulta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consulta = Consulta::find($id);
        return view('consulta.edit',compact('consulta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'data'=>'required',
            'horario'=>'required',
            'tipo'=>'required',

        ]);

        Consulta::find($id)->update($request->all());
        return redirect(route('consulta.index'))->with('success',' Alterado com Sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
