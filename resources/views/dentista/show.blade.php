@extends('adminlte::page')

@section('title', 'Dentistas')

@section('content_header')
    <h1 class="text-center">Ver</h1>
@stop

@section('content')
    <div class="card mt-3">
        <div class="col-lg-12 ">
          <div class="pull-left">
            <h3><a class="btn btn-success" href="{{route('dentista.index')}}">Voltar</a></h3>

              <div class="container">

                  <table class="table table-hover">
                      <thead>
                      <tr>

                          <th>#</th>
                          <th>Nome</th>
                          <th>Telefone</th>
                          <th>email</th>
                          <th>endereco</th>
                          <th>Sigla</th>
                         
                          <th class="text-align-center">Açoes</th>
                      </tr>s
                      </thead>
                      <tbody>


                          <h1>
                              <div class="row">
                                  <div class="card body">
                                      <tr>
                                          <td>{{$dentista->id}}</td>
                                          <td>{{$dentista->nome}}</td>
                                          <td>{{$dentista->telefone}}</td>
                                          <td>{{$dentista->email}}</td>
                                          <td>{{$dentista->endereco}}</td>
                                            s<td>{{$dentista->sigla}}</td>
                                          <td>
      <a class="btn btn-info btn-sm glyphicon glyphicon-pencil" href="{{ route('dentista.edit',$dentista->id)}}">Editar</a>



@stop