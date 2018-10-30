@extends('adminlte::page')

@section('title', 'Consultas')

@section('content_header')
    <h1 class="text-center"><b>EDITAR PACIENTE</b></h1>
@stop

@section('content')
<div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
  @endif
{{ Form::model($convenio,['method'=>'PATCH','route'=>['convenio.update',$convenio]]) }}

        {{csrf_field()}}

       <div class="form-group form-group-lg">
        {{ Form::label('nome', 'NOME', array('class'=>'control-label')) }}
        {{ Form::text('nome', null, array('placeholder'=>'Nome  do Convenio...', 'class'=>'form-control')) }}
    </div>

    <div class="form-group form-group-lg">
        {{ Form::label('data', 'DATA', array('class'=>'control-label')) }}
        {{ Form::date('data', null, array('placeholder'=>'Seu a  data da  nome  do convenio...', 'class'=>'form-control')) }}
    </div>

    <div class="form-group form-group-lg">
        {{ Form::label('regiao', 'REGIÃO', array('class'=>'control-label')) }}
        {{ Form::text('regiao', null, array('placeholder'=>'Regiao do Convenio..', 'class'=>'form-control')) }}
    </div>



        <div class="form-group">
            {{ Form::submit('Atualizar', array('class' => 'btn btn-success')) }}
            <a href="{{route('convenio.index')}}" class=" btn btn-danger glyphicon glyphicon-repeat">Voltar</a>
        </div>
{{ Form::close() }}




@stop