@extends('adminlte::page')

@section('title', 'Consultório')

@section('content_header')
    <h1 class="text-black text-center"><b>CONSULTÓRIOS</b></h1>
@stop
@section('content')


<a href="{{route('consultorio.create')}}"><button type="submit" class ="btn btn-success glyphicon glyphicon-plus"> Adicionar</button></a>
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
                <th>CNPJ</th>
                <th>ENDEREÇO</th>
                <th>BAIRRO</th>
                <th>TELEFONE</th>
               

                <th>AÇÕES</th>

        </thead>
        <tbody>

     @foreach($consultorios as $consultorio)

            <div class="card mt-3">
                <div class="card body">
                <tr>
                    <td>{{$consultorio->id}}</td>
                    <td>{{$consultorio->nome}}</td>
                    <td>{{$consultorio->cnpj}}</td>
                    <td>{{$consultorio->endereco}}</td>
                    <td>{{$consultorio->bairro}}</td>
                    <td>{{$consultorio->telefone}}</td>

                   
                <td>
                <form onsubmit="return confirm('Deseja  Realmente Apagar ')" class ="d-inline-block" method ="post" action="{{route('consultorio.destroy',$consultorio->id)}}">
                
                        <a class="btn btn-warning btn-sm glyphicon glyphicon-eye-open" href="{{ route('consultorio.show',$consultorio->id)}}"></a>
                        <a class="btn btn-info btn-sm glyphicon glyphicon-pencil" href="{{ route('consultorio.edit',$consultorio->id)}}"></a>
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

        {{ $consultorios->links() }}
        
    </div>

@stop