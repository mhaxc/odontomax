@extends('adminlte::page')

@section('title', 'Paciente')

@section('content_header')
    <h1 class="text-black text-center">LISTA DE PACIENTE</h1>
@stop
@section('content')


<a href="{{route('consulta.create')}}"><button type="submit" class ="btn btn-success">Adicionar</button></a>
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
                <th>Data</th>
                <th>Horario</th>
                <th>Tipo</th>
                <th>Dentista</th>
                <th>Paciente</th>
                <th>Açoes</th>

        </thead>
        <tbody>

     @foreach($consultas as $consulta)

            <div class="card mt-3">
                <div class="card body">
                <tr>
                    <td>{{$consulta->id}}</td>
                    <td>{{$consulta->data_consulta}}</td>
                    <td>{{$consulta->horario}}</td>
                    <td>{{$consulta->tipo}}</td>
                    <td>{{$consulta->dentista_id}}</td>
                    <td>{{$consulta->paciente_id}}</td>
                <td>
                <form onsubmit="return confirm('deseja  realmente apagar Esse Paciente')" class ="d-inline-block" method ="post" action="{{route('consulta.destroy',$consulta->id)}}">
                
                        <a class="btn btn-warning btn-sm glyphicon glyphicon-eye-open" href="{{ route('consulta.show',$consulta->id)}}"> Ver </a>
                        <a class="btn btn-info btn-sm glyphicon glyphicon-pencil" href="{{ route('consulta.edit',$consulta->id)}}"> Editar </a>
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

        {{ $consultas->links() }}
        
    </div>

@stop