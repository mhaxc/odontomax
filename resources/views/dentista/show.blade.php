@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Ver</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header"></div>
        <h2>{{$dentista->nome}}</h2>
    </div>
    <div class="card-body">
        <p>
            {{$dentista->telefone}}
        </p>

    </div>

@stop