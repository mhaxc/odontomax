@extends('adminlte::page')

@section('title', 'Medicamentos')

@section('content_header')
    <h1 class="text-black text-center"><b>MEDICAMENTO</b></h1>
@stop
@section('content')


<a href="{{route('medicamento.create')}}"><button type="submit" class ="btn btn-success glyphicon glyphicon-plus">Adicionar</button></a>
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
                <th>NOME</th>s
                <th>PODOLOGIA</th>

                <th>AÇOÊS</th>

        </thead>
        <tbody>

     @foreach($medicamentos as $medicamento)


                    <div class="card mt-3">
                        <div class="card body">
                        <tr>
                            <td>{{$medicamento->id}}</td>
                            <td>{{$medicamento->nome}}</td>
                            <td>{{$medicamento->posologia}}</td>

                            <td>
                                <form onsubmit="return confirm('Deseja  Realmente Apagar')" class ="d-inline-block" method ="post" action="{{route('medicamento.destroy',$medicamento->id)}}">
                                    <a class="btn btn-warning btn-sm glyphicon glyphicon-eye-open" href="{{ route('medicamento.show',$medicamento->id)}}"></a>
                                    <a class="btn btn-info btn-sm glyphicon glyphicon-pencil" href="{{ route('medicamento.edit',$medicamento->id)}}"></a>
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

        {{ $medicamentos->links() }}
        
    </div>

@stop