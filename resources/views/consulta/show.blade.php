@extends('adminlte::page')

@section('title', 'Consultas')

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
                           <th>Data</th>
                           <th>Horario</th>
                           <th>Tipo</th>
                           <th>Dentista</th>
                           <th>Paciente</th>
                           <th>Açoes</th>
                         
                          <th class="text-align-center">Açoes</th>
                      </tr>
                      </h1>
                      </thead>
                      <tbody>


                          <h1>
                              <div class="row">
                                  <div class="card body">
                                      <tr>
                                          <td>{{$consulta->id}}</td>
                                          <td>{{$consulta->data_consulta}}</td>
                                          <td>{{$consulta->horario}}</td>
                                          <td>{{$consulta->tipo}}</td>
                                          <td>{{$consulta->dentista_id}}</td>
                                          <td>{{$consulta->paciente_id}}</td>
                                          <td>
      <a class="btn btn-info btn-sm glyphicon glyphicon-pencil" href="{{ route('consulta.edit',$consulta->id)}}">Editar</a>



@stop