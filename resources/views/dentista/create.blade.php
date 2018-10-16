@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="text-center">Criar um Dentista</h1>
@stop

@section('content')
    @if($errors->all())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </div>
    @endif
    <form action="{{route('dentista.store')}}" method="post">
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
    </form>
@stop