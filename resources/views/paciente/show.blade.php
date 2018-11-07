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

              <div class="container ">

                  <table class="table table-hover">
                  <thead>
                      <tr class="default">
                          <th class="default">#</th>
                          <th>NOME</th>
                          <th>TELEFONE</th>
                          <th>EMAIL</th>
                          <th>ANIVERSARIO</th>
                          <th>ENDEREÇO</th>
                          <th>CPF</th>
                          <th>Obs</th>

                          <th class="text-align-center">AÇOÊS</th>
                      </tr>
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
                                          <td class="">{{ date( 'd/m/Y' ,strtotime($paciente->aniversario))}}</td>
                                          <td>{{$paciente->endereco}}</td>
                                            <td>{{$paciente->cpf}}
                                          <td>{{$paciente->obs}}</td>
                                          <td>
      <a class="btn btn-info btn-sm glyphicon glyphicon-pencil" href="{{ route('paciente.edit',$paciente->id)}}">Editar</a>



@stop