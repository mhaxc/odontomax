@extends('adminlte::page')

@section('title', 'AdminLTE')

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
  {{--  <form action="{{route('dentista.store')}}" method="post">
        @csrf
        <div class="form group">
            <label for="nome">Nome</label>
            <input type="text" name="title" id="nome" class="form-control">
        </div>

        <div class="form group">
            <label for="content">content</label>
            <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
        </div>

        <div class="form-control">
            <button type="submit" class="btn btn-outline-info">ADD a Post</button>

        </div>
    </form>--}}
    {{ Form::open(['action'=>'DentistaController@store']) }}

        {{csrf_field()}}

    <div class="form-group">
        {{ Form::label('nome', 'Nome', array('class'=>'control-label')) }}
        {{ Form::text('nome', null, array('placeholder'=>'Seu nome...', 'class'=>'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('Telefone', 'Telefone', array('class'=>'control-label')) }}
        {{ Form::text('telefone', null, array('placeholder'=>'Seu telefone...', 'class'=>'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('email', 'E-mail', array('class'=>'control-label')) }}
        {{ Form::text('email', null, array('placeholder'=>'Seu e-mail...', 'class'=>'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('senha', 'Senha', array('class'=>'control-label')) }}
        {{ Form::number('senha', null, array('placeholder'=>'Sua senha...', 'class'=>'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::submit('Adicionar', array('class' => 'btn btn-success')) }}

    </div>
    {{ Form::close() }}



@stop