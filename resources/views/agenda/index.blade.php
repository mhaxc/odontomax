@extends('adminlte::page')

@section('title', 'Agendas')

@section('content_header')
    <h1 class="text-black text-center"><b>AGENDAS</b></h1>
@stop
@section('content')


<a href="{{route('agenda.create')}}"><button type="submit" class ="btn btn-success glyphicon glyphicon-plus"> Adicionar</button></a>
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
                <th>DATA</th>
                <th>HORARIO INICIO</th>
                <th>HORARIO FINAL</th>
                <th>NOME</th>
                <th>CONSULTÓRIO</th>
                <th>DENTISTA</th>
                <th>AÇOÊS</th>

        </thead>
        <tbody>

     @foreach($agendas as $agenda)

            <div class="card mt-3">
                <div class="card body">
                <tr>
                    <td>{{$agenda->id}}</td>
                    <td>{{$agenda->data}}</td>
                    <td>{{$agenda->horario_inicio}}</td>
                    <td>{{$agenda->horario_final}}</td>
                    <td>{{$agenda->nome}}</td>
                    <td>{{$agenda->consultorio_id}}</td>
                    <td>{{$agenda->dentista_id}}</td>

                <td>
                <form onsubmit="return confirm('deseja  realmente apagar Esse Paciente')" class ="d-inline-block" method ="post" action="{{route('agenda.destroy',$agenda->id)}}">
                
                        <a class="btn btn-warning btn-sm glyphicon glyphicon-eye-open" href="{{ route('agenda.show',$agenda->id)}}"> Ver </a>
                        <a class="btn btn-info btn-sm glyphicon glyphicon-pencil" href="{{ route('agenda.edit',$agenda->id)}}"> Editar </a>
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

    <div class="mt-4">

        {{ $agendas->links() }}
        
    </div>

@stop