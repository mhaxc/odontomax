@extends('adminlte::page')

@section('title', 'Dentistas')

@section('content_header')
    <h1 class="text-center">NOVO MEDICAMENTO</h1>
    
@stop

@section('content')
    @if($errors->all())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </div>
    @endif
 
    {{ Form::open(['action'=>'MedicamentoController@store']) }}

        {{csrf_field()}}

    <div class="form-group form-group-lg">
        {{ Form::label('nome', 'Nome', array('class'=>'control-label')) }}
        {{ Form::text('nome', null, array('placeholder'=>'Nome do medicamento...', 'class'=>'form-control')) }}
    </div>

    <div class="form-group form-group-lg">
        {{ Form::label('Posologia', 'Posologia', array('class'=>'control-label')) }}
        {{ Form::text('posologia', null, array('placeholder'=>'Posologia...', 'class'=>'form-control')) }}
    </div>

    <div class="form-group form-group-lg">
        {{ Form::label('substancia', 'Substancia', array('class'=>'control-label')) }}
        {{ Form::text('substancia', null, array('placeholder'=>'Seu e-mail...', 'class'=>'form-control')) }}
    </div>




    <div class="form-group form-group-lg">
        {{ Form::submit('Salvar', array('class' => 'btn btn-success')) }}
        <a href="{{route('medicamento.index')}}" class=" btn btn-danger">Voltar</a>
    </div>
    {{ Form::close() }}



@stop