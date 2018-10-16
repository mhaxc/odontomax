@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="text-black text-center">Lista de  Dentista</h1>
@stop
@section('content')



<br>
<a href="{{route('dentista.create')}}"><button type="submit" class ="btn btn-success">Adicionar</button></a>
    <div class="table-responsive-md ">

        <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>email</th>
                <th>Senha</th>
                <th>Açoes</th>
            </tr>
        </thead>
    <tbody>

        @foreach($dentistas as $dentista)
            <div class="card mt-2">
            <div class="card body">
                <tr>
                    <td>{{$dentista->id}}</td>
                    <td>{{$dentista->nome}}</td>
                    <td>{{$dentista->telefone}}</td>
                    <td>{{$dentista->email}}</td>
                    <td>{{$dentista->senha}}</td>
                </tr>
    </div>
    </div>

    </tbody>
       @endforeach

    </table>
    </div>
    <div class="card mt-2"></div>
    <div class="card body">
       {{-- <h2>


            <form onsubmit="return confirm('deseja  realmente apagar essa  post?')" class ="d-inline-block" method ="post" action="{{route('dentista.destroy',$dentista->id)}}">
                @csrf
                @method('delete')
                <button type="submit" class ="btn btn-danger">Deletar</button>
            </form>
        </h2>--}}
    </div>

    <div class="mt-4">

    </div>

@stop
