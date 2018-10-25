<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes = Paciente::latest()->paginate(10);
        return view('paciente.index',compact('pacientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('paciente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'cpf'=>'required|min:11',
            'nome'=>'required',
            'endereco'=>'required',
            'telefone'=>'required ',
            'email'=>'required|email',
            'obs'=>'required|max:10',

        ]);

        Paciente::create($request->all());
        return redirect(route('paciente.index'))->with('success','Adicionado  com Sucesso');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paciente=Paciente::find($id);
        return view('paciente.show',compact('paciente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paciente=Paciente::find($id);
        return view('paciente.edit',compact('paciente'));
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
            $request->validate([
            'cpf'=>'required|min:11',
            'nome'=>'required|min:9',
            'endereco'=>'required',
            'telefone'=>'required ',
            'email'=>'required|email',
            'obs'=>'required|max:10',
        ]);

        Paciente::find($id)->update($request->all());
        return redirect(route('paciente.index'))->with('success','Paciente Alterado com Sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Paciente::find($id)->delete();
        return redirect(route('paciente.index'))->with('success','Deletado com  sucesso ');
    }
}
