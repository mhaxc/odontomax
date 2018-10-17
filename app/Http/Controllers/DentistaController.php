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
        $dentistas = Dentista::orderby('nome','desc')->paginate(10);
        return view('dentista.index',['dentistas' => $dentistas]);
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
            'senha'=>'required|min:6'

        ]);

        Dentista::create([
            'nome'=>$request->nome,
            'telefone'=>$request->telefone,
            'email'=>$request->email,
            'senha'=>$request->senha,
        ]);
        return redirect(route('dentista.index'));


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Dentista $dentista)
    {
        return view('dentista.show',['dentista'=>$dentista]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( Dentista $dentista)
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
    public function update(Request $request, $id)
    {
        //
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
