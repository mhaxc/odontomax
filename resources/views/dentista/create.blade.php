@extends('adminlte::page')

@section('title', 'Dentistas')

@section('content_header')
    <h1 class="text-center">NOVO DENTISTA</h1>
    
@stop

@section('content')
    @if($errors->all())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </div>
    @endif
 
    {{ Form::open(['action'=>'DentistaController@store']) }}

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
        {{ Form::label('sigla', 'sigla', array('class'=>'control-label')) }}
        {{ Form::text('sigla', null, array('placeholder'=>'Seu sigla...', 'class'=>'form-control')) }}
    </div>



    <div class="form-group form-group-lg">
        {{ Form::submit('Salvar', array('class' => 'btn btn-success')) }}
        <a href="{{route('dentista.index')}}" class=" btn btn-danger">Voltar</a>
    </div>
    {{ Form::close() }}



@stop