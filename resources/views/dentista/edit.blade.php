@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="text-center">EDITAR DENTISTA</h1>
@stop

@section('content')
<div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
      @endif
<div class="card uper">
  <div class="card-header">

  </div>
  <div class="card-body">
    
    <form action="{{ route('dentista.update', $dentista->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
          <label for="nome"> Name:</label>
          <input type="text" class="form-control" name="nome" value={{ $dentista->nome}} />
        </div>
        
        <div class="form-group">
          <label for="telefone">telefone</label>
          <input type="text" class="form-control" name="telefone" value={{ $dentista->telefone }} />
        </div>
        
        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" class="form-control" name="email" value={{ $dentista->email }} />
        </div>
        
        

        <button type="submit" class="btn btn-primary">Atualizar</button>
      </form>
  </div>
</div>



@stop