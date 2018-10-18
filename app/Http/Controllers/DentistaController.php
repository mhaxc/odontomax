<?php

namespace App\Http\Controllers;

use App\Models\Dentista;
use Illuminate\Http\Request;

class DentistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dentistas = Dentista::all();
        return view('dentista.index',compact('dentistas'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dentista.create');
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
            'nome'=>'required|min:3',
            'telefone'=>'required|min:10',
            'email'=>'required',
            

        ]);

        Dentista::create($request->all());
        return redirect(route('dentista.index'))->with('sucess','addicionar');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Dentista $dentista)
    {
        return view('dentista.show',compact('dentista'));

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Dentista $dentista)
    {
        return view('dentista.edit',compact('dentista'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Dentista $dentista)
    {
        $request->validate([
            'nome'=>'required',
            'telefone'=> 'required|integer',
            'email' => 'required',
            'senha' => 'required'
          ]);
            
         
          return redirect(route('dentista.index'))->with('success', 'Stock has been updated');
    }
    
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dentista $dentista)
    {
       
        $dentista->delete();
        return redirect(route('dentista.index'))->with('sucess','stoque has  deletar');
    }
}
