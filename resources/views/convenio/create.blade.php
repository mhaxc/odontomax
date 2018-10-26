@extends('adminlte::page')

@section('title', 'Consultas')

@section('content_header')
    <h1 class="text-center">NOVA CONVENIO</h1>
    
@stop

@section('content')
    @if($errors->all())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </div>
    @endif
 
    {{ Form::open(['action'=>'ConvenioController@store']) }}

        {{csrf_field()}}

    <div class="form-group form-group-lg">
        {{ Form::label('nome', 'Nome', array('class'=>'control-label')) }}
        {{ Form::text('nome', null, array('placeholder'=>'Nome  do Convenio...', 'class'=>'form-control')) }}
    </div>

    <div class="form-group form-group-lg">
        {{ Form::label('data', 'Data', array('class'=>'control-label')) }}
        {{ Form::date('data', null, array('placeholder'=>'Seu a  data da  nome  do convenio...', 'class'=>'form-control')) }}
    </div>

    <div class="form-group form-group-lg">
        {{ Form::label('regiao', 'regiao', array('class'=>'control-label')) }}
        {{ Form::text('regiao', null, array('placeholder'=>'Regiao do Convenio..', 'class'=>'form-control')) }}
    </div>



    

    <div class="form-group form-group-lg">
        {{ Form::submit('Salvar', array('class' => 'btn btn-success')) }}
        <a href="{{route('consulta.index')}}" class=" btn btn-danger">Voltar</a>
    </div>
    {{ Form::close() }}



@stop