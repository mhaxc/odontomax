@extends('adminlte::page')

@section('title', 'Consultas')

@section('content_header')
    <h1 class="text-center"><b>NOVA CONVENIO</b></h1>
    
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
        {{ Form::label('razao_social', 'RAZAO SOCIAL', array('class'=>'control-label')) }}
        {{ Form::text('razao_social', null, array('placeholder'=>'Nome  do Convenio...', 'class'=>'form-control')) }}
    </div>
    <div class="form-group form-group-lg">
        {{ Form::label('codigo', 'CODIGO', array('class'=>'control-label')) }}
        {{ Form::text('codigo', null, array('placeholder'=>'Nome  do Convenio...', 'class'=>'form-control')) }}
    </div>

    <div class="form-group form-group-lg">
        {{ Form::label('nome', 'NOME', array('class'=>'control-label')) }}
        {{ Form::text('nome', null, array('placeholder'=>'Nome  do Convenio...', 'class'=>'form-control')) }}
    </div>


    <div class="form-group form-group-lg">
        {{ Form::label('data', 'DATA', array('class'=>'control-label')) }}
        {{ Form::text('data', null, array('placeholder'=>'Seu a  data da  nome  do convenio...', 'class'=>'form-control date')) }}
    </div>

    

    <div class="form-group form-group-lg">
        {{ Form::submit('Salvar', array('class' => 'btn btn-success')) }}
        <a href="{{route('consulta.index')}}" class=" btn btn-danger glyphicon glyphicon-repeat">Voltar</a>
    </div>
    {{ Form::close() }}



@stop