@extends('adminlte::page')

@section('title', 'Paciente')

@section('content_header')
    <h1 class="text-black text-center">LISTA DE PACIENTE</h1>
@stop
@section('content')


<a href="{{route('paciente.create')}}"><button type="submit" class ="btn btn-success glyphicon glyphicon-plus">Adicionar</button></a>
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
                <th>E-mail</th>
                <th>ENDEREÇO</th>
                <th>CPF</th>
                <th>OBSERVAÇAO</th>
                <th>Ações</th>

        </thead>
        <tbody>

     @foreach($pacientes as $paciente)

            <div class="card mt-3">
                <div class="card body">
                <tr>
                    <td>{{$paciente->id}}</td>
                    <td>{{$paciente->nome}}</td>
                    <td>{{$paciente->telefone}}</td>
                    <td>{{$paciente->email}}</td>
                    <td>{{$paciente->endereco}}</td>
                    <td>{{$paciente->cpf}}</td>
                    <td>{{$paciente->obs}}</td>
                <td>
                <form onsubmit="return confirm('deseja  realmente apagar Esse Paciente')" class ="d-inline-block" method ="post" action="{{route('paciente.destroy',$paciente->id)}}">
                
                        <a class="btn btn-warning btn-sm glyphicon glyphicon-eye-open" href="{{ route('paciente.show',$paciente->id)}}"></a>
                        <a class="btn btn-info btn-sm glyphicon glyphicon-pencil" href="{{ route('paciente.edit',$paciente->id)}}"></a>
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

        {{ $pacientes->links() }}
        
    </div>

@stop