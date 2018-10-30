@extends('adminlte::page')

@section('title', 'Dentistas')

@section('content_header')
    <h1 class="text-black text-center"><b>DENTISTAS</b></h1>
@stop
@section('content')


<a href="{{route('dentista.create')}}"><button type="submit" class ="btn btn-success glyphicon glyphicon-plus">Adicionar</button></a>
<div>
    <br/>
    @if(Session::has('success'))
    <div class="alert alert-success" role="alert">
    {{Session::get('success')}} 
    </div>
    @endif
</div>
<br/>
<div class="table ">

        <table class="table table-hover">
        <thead>

            <tr>
                <th>#</th>
                <th>NOME</th>
                <th>TELEFONE</th>
                <th>EMAIL</th>
                <th>ENDEREÇO</th>
                <th>CRM</th>
                <th>AÇOÊS</th>

        </thead>
        <tbody>

     @foreach($dentistas as $dentista)


                    <div class="card mt-3">
                        <div class="card body">
                        <tr>
                            <td>{{$dentista->id}}</td>
                            <td>{{$dentista->nome}}</td>
                            <td>{{$dentista->telefone}}</td>
                            <td>{{$dentista->email}}</td>
                            <td>{{$dentista->endereco}}</td>
                            <td>{{$dentista->crm}}</td>
                            <td>
                                <form onsubmit="return confirm('Deseja  Realmente Apagar')" class ="d-inline-block" method ="post" action="{{route('dentista.destroy',$dentista->id)}}">
                                    <a class="btn btn-warning btn-sm glyphicon glyphicon-eye-open" href="{{ route('dentista.show',$dentista->id)}}"></a>
                                    <a class="btn btn-info btn-sm glyphicon glyphicon-pencil" href="{{ route('dentista.edit',$dentista->id)}}"></a>
                                @csrf
                              @method('DELETE')
                                    <button class="btn btn-danger btn-sm glyphicon glyphicon-trash" type="submit"></button>
                            </form>
                            </td>
                            </tr>
                        </div>
            </div>

        </tbody>

@endforeach


    </table>
    </div>
    <div class="card mt-2"></div>
    <div class="card body">
        
    

        </h2>
    </div>

    <div class="mt-4">

        {{ $dentistas->links() }}
        
    </div>

@stop