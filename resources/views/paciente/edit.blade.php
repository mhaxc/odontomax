@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="text-center">EDITAR PACIENTE</h1>
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
{{ Form::model($paciente,['method'=>'PATCH','route'=>['paciente.update',$paciente]]) }}

        {{csrf_field()}}

        <div class="form-group form-group-lg">
            {{ Form::label('nome', 'Nome', array('class'=>'control-label')) }}
            {{ Form::text('nome', null, array('placeholder'=>'Seu nome...', 'class'=>'form-control')) }}
        </div>

        <div class="form-group form-group-lg">
            {{ Form::label('Telefone', 'Telefone', array('class'=>'control-label')) }}
            {{ Form::text('telefone', null, array('placeholder'=>'Seu telefone...', 'class'=>'form-control')) }}
        </div>

        <div class="form-group form-group-lg">
            {{ Form::label('email', 'E-mail', array('class'=>'control-label')) }}
            {{ Form::text('email', null, array('placeholder'=>'Seu e-mail...', 'class'=>'form-control')) }}
        </div>
        <div class="form-group form-group-lg">
        {{ Form::label('endereco', 'Endereco', array('class'=>'control-label')) }}
        {{ Form::text('endereco', null, array('placeholder'=>'Seu endereco...', 'class'=>'form-control')) }}
        </div>
   
        <div class="form-group form-group-lg">
        {{ Form::label('cpf', 'Cpf', array('class'=>'control-label')) }}
        {{ Form::text('cpf', null, array('placeholder'=>'Seu Cpf valido!...', 'class'=>'form-control')) }}
        </div>

        <div class="form-group form-group-lg">
            {{ Form::label('obs', 'Observaçao', array('class'=>'control-label')) }}
            {{ Form::text('obs', null, array('placeholder'=>' Observaçao...', 'class'=>'form-control')) }}
        </div>

        <div class="form-group form-group-lg">
            {{ Form::submit('Atualizar', array('class' => 'btn btn-success')) }}
            <a href="{{route('paciente.index')}}" class=" btn btn-danger">Voltar</a>
        </div>
{{ Form::close() }}




@stop