@extends('adminlte::page')

@section('title', 'Consultórios')

@section('content_header')
    <h1 class="text-black text-center"><b>EDITAR DE CONSULTÓRIOS</b></h1>
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
{{ Form::model($consultorio,['method'=>'PATCH','route'=>['consultorio.update',$consultorio]]) }}

        {{csrf_field()}}

        <div class="form-group form-group-lg">
            {{ Form::label('nome', 'CONSULTÓRIO', array('class'=>'control-label')) }}
            {{ Form::text('nome', null, array('placeholder'=>'nome  do consultório...', 'class'=>'form-control')) }}
        </div>

        <div class="form-group form-group-lg">
            {{ Form::label('cnpj', 'CNPJ ', array('class'=>'control-label')) }}
            {{ Form::number('cnpj', null, array('placeholder'=>'Cnpj...', 'class'=>'form-control')) }}
        </div>

        <div class="form-group form-group-lg">
            {{ Form::label('endereco', 'ENDEREÇO', array('class'=>'control-label')) }}
            {{ Form::text('endereco', null, array('placeholder'=>'Endereco..', 'class'=>'form-control')) }}
        </div>

        <div class="form-group form-group-lg">
            {{ Form::label('bairro', 'BAIRRO', array('class'=>'control-label')) }}
            {{ Form::text('bairro', null, array('placeholder'=>'bairro..', 'class'=>'form-control')) }}
        </div>

        <div class="form-group form-group-lg">
            {{ Form::label('telefone', 'TELEFONE', array('class'=>'control-label')) }}
            {{ Form::text('telefone', null, array('placeholder'=>'Telefone..', 'class'=>'form-control')) }}
        </div>



        <div class="form-group form-group-lg">
            {{ Form::submit('Atualizar', array('class' => 'btn btn-success')) }}
            <a href="{{route('consultorio.index')}}" class=" btn btn-danger glyphicon glyphicon-repeat">Voltar</a>
        </div>

{{ Form::close() }}




@stop