@extends('adminlte::page')

@section('title', 'Paciente')

@section('content_header')
    <h1 class="text-center">PACIENTE</h1>
@stop

@section('content')
    <div class="card mt-3">
        <div class="col-lg-12 ">
          <div class="pull-left">
            <h3><a class="btn btn-success" href="{{route('paciente.index')}}">Voltar</a></h3>

              <div class="table">

                  <table class="table table-hover">
                      <thead>
                      <tr>
                       <h1>
                          <th>#</th>
                          <th>Nome</th>
                          <th>Telefone</th>
                          <th>email</th>
                          <th>endereco</th>
                          <th>cpf</th>
                         
                          <th class="text-align-center">Açoes</th>
                      </tr>
                      </h1>
                      </thead>
                      <tbody>


                          <h1>
                              <div class="row">
                                  <div class="card body">
                                      <tr>
                                          <td>{{$paciente->id}}</td>
                                          <td>{{$paciente->nome}}</td>
                                          <td>{{$paciente->telefone}}</td>
                                          <td>{{$paciente->email}}</td>
                                          <td>{{$paciente->endereco}}</td>
                                            <td>{{$paciente->cpf}}</td>
                                          <td>
      <a class="btn btn-info btn-sm glyphicon glyphicon-pencil" href="{{ route('paciente.edit',$paciente->id)}}">Editar</a>



@stop