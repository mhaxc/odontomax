<?php

namespace App\Http\Controllers;

use App\Models\Consultorio;
use Illuminate\Http\Request;

class ConsultorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consultorios = Consultorio::latest()->paginate(10);

        return view('consultorio.index',compact('consultorios'));

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('consultorio.create ');
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
        'nome'=>'required',
        'cnpj'=>'required',
        'endereco'=>'required',
        'bairro'=>'required',
        'telefone'=>'required ',



    ]);

        Consultorio::create($request->all());
        return redirect(route('consultorio.index'))->with('success','Adicionado  com Sucesso');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $consultorio = Consultorio::find($id);
        return view('consultorio.show',compact('consultorio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consultorio = Consultorio::find($id);
        return view('consultorio.edit',compact('consultorio'));
    }



    public function update(Request $request, $id)
    {

        $this->validate($request,[
            'nome'=>'required',
            'cnpj'=>'required',
            'endereco'=>'required',
            'bairro'=>'required',
            'telefone'=>'required ',


        ]);

        Consultorio::find($id)->update($request->all());
        return redirect(route('consultorio.index'))->with('success',' Alterado com Sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Consultorio::find($id)->delete();
        return redirect(route('consultorio.index'))->with('success','Deletado com  sucesso ');
    }
}
