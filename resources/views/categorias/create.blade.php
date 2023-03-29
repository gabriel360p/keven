@extends('master')

@section('head')
@endsection

@section('navbar')
    
@endsection

@section('content')
    <div class="container">
        <form action="{{route('categorias.store')}}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="" class="form-label">Nome</label>
              <input type="text"
                class="form-control" name="nome" id="" aria-describedby="helpId" placeholder="">
              <small id="helpId" class="form-text text-muted">Nome da Categoria</small>
            </div>
            <button  class="btn btn-primary">Salvar</button>
        </form>
    </div>
@endsection