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

    <div class="form-group">
        {{ Form::label('data', 'Data', array('class'=>'control-label')) }}
        {{ Form::date('data', null, array('placeholder'=>'Seu a  data da  consulta...', 'class'=>'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('horario', 'Horario', array('class'=>'control-label')) }}
        {{ Form::time('horario', null, array('placeholder'=>'Horario...', 'class'=>'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('tipo', 'Tipo', array('class'=>'control-label')) }}
        {{ Form::text('tipo', null, array('placeholder'=>'Seu o tipo de consulta...', 'class'=>'form-control')) }}
    </div>
    
    <div class="form-group">

                
    </select>

</div>
    
    

    <div class="form-group">
        {{ Form::submit('Salvar', array('class' => 'btn btn-success')) }}
        <a href="{{route('dentista.index')}}" class=" btn btn-danger">Voltar</a>
    </div>
    {{ Form::close() }}



@stop