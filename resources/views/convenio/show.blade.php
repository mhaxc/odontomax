@extends('adminlte::page')

@section('title', 'Consultas')

@section('content_header')
    <h1 class="text-center">Convenio</h1>
@stop

@section('content')
    <div class="card mt-3">
        <div class="col-lg-12 ">
          <div class="pull-left">
            <h3><a class="btn btn-danger glyphicon glyphicon-repeat" href="{{route('convenio.index')}}">Voltar </a></h3>

              <div class="table">

                  <table class="table table-hover">
                      <thead>
                      <tr>
                       <h1>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Data</th>
                        <th>Região</th>
                   
                         
                          <th class="text-align-center">Açoes</th>
                      </tr>
                      </h1>
                      </thead>
                      <tbody>


                          
                              <div class="text-monospace">
                                  <div class="text-monospace">
                                    
                                  <tr>
                                        <td>{{$convenio->id}}</td>
                                         <td>{{$convenio->nome}}</td>
                                         <td>{{$convenio->data}}</td>
                                          <td>{{$convenio->regiao}}</td>
                                          
                                          <td><a class="btn btn-info btn-sm glyphicon glyphicon-pencil" href="{{ route('convenio.edit',$convenio->id)}}">Editar</a></td>


@stop