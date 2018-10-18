@extends('adminlte::page')

@section('title', 'Dentista')

@section('content_header')
    <h1 class="text-black text-center">Lista de  Dentista</h1>
@stop
@section('content')

<br>
<a href="{{route('dentista.create')}}"><button type="submit" class ="btn btn-success">Adicionar</button></a>
    <div class="table-responsive-md ">

        <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>email</th>
               
                <th class="text-align-center">Açoes</th>
            </tr>
        </thead>
    <tbody>

        @foreach($dentistas as $dentista)
        <h2>
            <div class="card mt-3">
                <div class="card body">
                <tr>
                    <td>{{$dentista->id}}</td>
                    <td>{{$dentista->nome}}</td>
                    <td>{{$dentista->telefone}}</td>
                    <td>{{$dentista->email}}</td>
                   
                <td> 
                <form action="{{ route('dentista.destroy',$dentista->id) }}" method="POST">
                    
                <a href="{{ route('dentista.edit',$dentista->id)}}" class="btn btn-primary btn-sm glyphicon glyphicon-pencil">Editar</a>
                    <a href="{{ route('dentista.show',$dentista->id)}}" class="	glyphicon glyphicon-eye-open btn btn-warning btn-sm">Ver</a> 
                    
                    
                    
                       @method('DELETE')
                        <button type="submit" class="glyphicon glyphicon-trash btn btn-danger btn-sm">Deletar</button>
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

    </div>

@stop
