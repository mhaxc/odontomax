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
        $dentistas = Dentista::latest()->paginate(10);
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
        return redirect(route('dentista.index'))->with('success','Adicionado  com Sucesso');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $dentista=Dentista::find($id);
        return view('dentista.show',compact('dentista'));

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dentista=Dentista::find($id);
        return view('dentista.edit',compact('dentista'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'nome'=>'required',
            'telefone'=> 'required|min:9',
            'email' => 'required'

          ]);
            
        Dentista::find($id)->update($request->all());
        return redirect(route('dentista.index'))->with('success','update has  deletar');
    }
    
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

       Dentista::find($id)->delete();
        return redirect(route('dentista.index'))->with('success','Deletado com  sucesso ');
    }
}
