@extends('adminlte::page')

@section('title', 'Consultório')

@section('content_header')
    <h1 class="text-center">Novo consultório</h1>
    
@stop

@section('content')
    @if($errors->all())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </div>
    @endif
 
    {{ Form::open(['action'=>'ConsultorioController@store']) }}

        {{csrf_field()}}

    <div class="form-group form-group-lg">
        {{ Form::label('nome', 'CONSULTORIO', array('class'=>'control-label')) }}
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
        {{ Form::submit('Salvar', array('class' => 'btn btn-success ')) }}
        <a href="{{route('consultorio.index')}}" class=" btn btn-danger glyphicon glyphicon-repeat">Voltar</a>
    </div>

    {{ Form::close() }}



@stop