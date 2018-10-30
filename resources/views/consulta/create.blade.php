@extends('adminlte::page')

@section('title', 'Consultas')

@section('content_header')
    <h1 class="text-center">NOVA CONSULTA</h1>
    
@stop

@section('content')
    @if($errors->all())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </div>
    @endif
 
    {{ Form::open(['action'=>'ConsultaController@store']) }}

        {{csrf_field()}}

    <div class="form-group form-group-lg">
        {{ Form::label('data', 'DATA', array('class'=>'control-label')) }}
        {{ Form::date('data', null, array('placeholder'=>'Seu a  data da  consulta...', 'class'=>'form-control')) }}
    </div>

    <div class="form-group form-group-lg">
        {{ Form::label('horario_inicio', 'HORARIO INICIO', array('class'=>'control-label')) }}
        {{ Form::time('horario_inicio', null, array('placeholder'=>'Horario Inicio...', 'class'=>'form-control')) }}
    </div>

    <div class="form-group form-group-lg">
        {{ Form::label('horario_final', 'HORARIO FINAL', array('class'=>'control-label')) }}
        {{ Form::time('horario_final', null, array('placeholder'=>'Horario Final...', 'class'=>'form-control')) }}
    </div>

    <div class="form-group form-group-lg">
        {{ Form::label('tipo', 'TIPO', array('class'=>'control-label')) }}
        {{ Form::text('tipo', null, array('placeholder'=>'Seu o tipo de consulta...', 'class'=>'form-control')) }}
    </div>


<div class="form-group form-group-lg">
    <select class="form-control" id="dentista">
        <option class="form-control">DENTISTAS</option>
        @foreach($dentistas  as $dentista)
            <option value={{$dentista->id}}>{{$dentista->nome}}</option>
        @endforeach
    </select>
</div>

<div class="form-group form-group-lg">
    <select class="form-control" id="paciente">
        <option class="form-control"><h2>PACIENTES</h2></option>
            @foreach($pacientes  as $paciente)
                <option value={{$paciente->id}}>{{$paciente->nome}}</option>
            @endforeach
        </select>
</div>
<div class="form-group form-group-lg">
        <select class="form-control" id="convenio">
            <option class="form-control"><h2>CONVENIOS</h2></option>
            @foreach($convenios  as $convenio)
               <option value={{$convenio->id}}>{{$convenio->nome}}</option>
            @endforeach
        </select>
</div>

    

    <div class="form-group form-group-lg">
        {{ Form::submit('Salvar', array('class' => 'btn btn-success glyphicon glyphicon-repeat')) }}
        <a href="{{route('consulta.index')}}" class=" btn btn-danger glyphicon glyphicon-repeat">Voltar</a>
    </div>
    {{ Form::close() }}



@stop