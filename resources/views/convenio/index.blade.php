@extends('adminlte::page')

@section('title', 'Consultas')

@section('content_header')
    <h1 class="text-black text-center"><b>LISTA DE CONVENIOS</b></h1>
@stop
@section('content')


<a href="{{route('convenio.create')}}"><button type="submit" class ="btn btn-success glyphicon glyphicon-plus"> Adicionar</button></a>
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
                <th>Nome</th>
                <th>Data</th>
                <th>Região</th>
               

                <th>Açoes</th>

        </thead>
        <tbody>

     @foreach($convenios as $convenio)

            <div class="card mt-3">
                <div class="card body">
                <tr>
                    <td>{{$convenio->id}}</td>
                    <td>{{$convenio->nome}}</td>
                    <td>{{$convenio->data}}</td>
                    <td>{{$convenio->regiao}}</td>
                
                   
                <td>
                <form onsubmit="return confirm('deseja  realmente apagar Esse Paciente')" class ="d-inline-block" method ="post" action="{{route('convenio.destroy',$convenio->id)}}">
                
                        <a class="btn btn-warning btn-sm glyphicon glyphicon-eye-open" href="{{ route('convenio.show',$convenio->id)}}"> Ver </a>
                        <a class="btn btn-info btn-sm glyphicon glyphicon-pencil" href="{{ route('convenio.edit',$convenio->id)}}"> Editar </a>
                    @csrf
                  @method('DELETE')
                  <button class="btn btn-danger btn-sm glyphicon glyphicon-trash" type="submit"> Delete </button>
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

        {{ $convenios->links() }}
        
    </div>

@stop