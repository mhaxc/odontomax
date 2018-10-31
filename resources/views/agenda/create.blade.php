@extends('adminlte::page')

@section('title', 'Agendas')

@section('content_header')
    <h1 class="text-center">AGENDA</h1>
    
@stop

@section('content')
    @if($errors->all())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </div>
    @endif
 
    {{ Form::open(['action'=>'AgendaController@store']) }}

        {{csrf_field()}}

    <div class="form-group form-group-lg">
        {{ Form::label('data_consulta', 'DATA', array('class'=>'control-label')) }}
        {{ Form::text('data_consulta', null, array('placeholder'=>'Seu a  data da  consulta...', 'class'=>'form-control date')) }}
    </div>

    <div class="form-group form-group-lg">
        {{ Form::label('horario_inicio', 'HORARIO INICIO', array('class'=>'control-label')) }}
        {{ Form::text('horario_inicio', null, array('placeholder'=>'Horario Inicio...', 'class'=>'form-control time')) }}
    </div>

    <div class="form-group form-group-lg">
        {{ Form::label('horario_final', 'HORARIO FINAL', array('class'=>'control-label')) }}
        {{ Form::text('horario_final', null, array('placeholder'=>'Horario Final...', 'class'=>'form-control time')) }}
    </div>

   <div class="form-group form-group-lg">
        {{ Form::label('tipo', 'TIPO', array('class'=>'control-label')) }}
        {{ Form::text('tipo', null, array('placeholder'=>'Seu o tipo de consulta...', 'class'=>'form-control')) }}
    </div>

<div class="form-group form-group-lg">
    <select class="form-control" id="dentista">
        <option class="form-control">Dentista</option>
        @foreach($dentistas  as $dentista)
            <option value={{$dentista->id}}>{{$dentista->nome}}</option>
        @endforeach
    </select>
</div>
<div class="form-group form-group-lg">
        <select class="form-control" id="Convenio">
            <option class="form-control"><h2>Consultorio</h2></option>
            @foreach($consultorios as $consultorio)
               <option value={{$consultorio->id}}>{{$consultorio->nome}}</option>
            @endforeach
        </select>
</div>

    

    <div class="form-group form-group-lg">
        {{ Form::submit('Salvar', array('class' => 'btn btn-success glyphicon glyphicon-repeat')) }}
        <a href="{{route('agenda.index')}}" class=" btn btn-danger glyphicon glyphicon-repeat">Voltar</a>
    </div>
    {{ Form::close() }}



@stop