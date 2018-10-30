@extends('adminlte::page')

@section('title', 'Consultas')

@section('content_header')
    <h1 class="text-black text-center"><b>CONSULTÓRIO</b></h1>
@stop

@section('content')
    <div class="card mt-3">
        <div class="col-lg-12 ">
          <div class="pull-left">
            <h3><a class="btn btn-danger glyphicon glyphicon-repeat" href="{{route('consultorio.index')}}">Voltar</a></h3>

              <div class="container">

                  <table class="table table-hover">
                      <thead>
                      <tr>
                       <h1>
                        <th>#</th>
                           <th>NOME</th>
                           <th>CNPJ</th>
                           <th>ENDEREÇO</th>
                           <th>BAIRRO</th>
                           <th>TELEFONE</th>
                         
                          <th class="text-align-center">AÇOÊS</th>
                      </tr>
                      </h1>
                      </thead>
                      <tbody>


                          
                              <div class="text-monospace">
                                  <div class="text-monospace">
                                    
                                  <tr>
                                      <td>{{$consultorio->id}}</td>
                                      <td>{{$consultorio->nome}}</td>
                                      <td>{{$consultorio->cnpj}}</td>
                                      <td>{{$consultorio->endereco}}</td>
                                      <td>{{$consultorio->bairro}}</td>
                                      <td>{{$consultorio->telefone}}</td>
                                          
                                          <td><a class="btn btn-info btn-sm glyphicon glyphicon-pencil" href="{{ route('consultorio.edit',$consultorio->id)}}"></a></td>


@stop