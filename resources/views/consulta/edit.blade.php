@extends('adminlte::page')

@section('title', 'Consultas')

@section('content_header')
    <h1 class="text-black text-center"><b>EDITAR DE CONSULTAS</b></h1>
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
{{ Form::model($consulta,['method'=>'PATCH','route'=>['consulta.update',$consulta]]) }}

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



        <div class="form-group">
            {{ Form::submit('Atualizar', array('class' => 'btn btn-success')) }}
            <a href="{{route('consulta.index')}}" class=" btn btn-danger glyphicon glyphicon-repeat"> Voltar</a>
        </div>
{{ Form::close() }}




@stop