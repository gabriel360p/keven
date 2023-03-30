@extends('master')

@section('head')
@endsection

@section('navbar')
    
@endsection

@section('content')
<div class="container">
  <div class="row justify-content-center align-items-center g-2">
    <div class="mb-3">
      <label for="" class="form-label">Nome</label>
      <input type="text"
        class="form-control" name="nome" id="" aria-describedby="helpId" placeholder="" value="{{$produto->nome}}" readonly>
      <small id="helpId" class="form-text text-muted">Nome do produto</small>          
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Descrição</label>
        <input type="text"
            class="form-control" name="descricao" id="" aria-describedby="helpId" placeholder="" readonly value="{{$produto->descricao}}">
        <small id="helpId" class="form-text text-muted">Descrição do produto</small>
    </div>
      
      <div class="mb-3">
        <label for="" class="form-label">Preço</label>
        <input type="number"
          class="form-control" name="preco" id="" aria-describedby="helpId" placeholder="" readonly value="{{$produto->preco}}">
        <small id="helpId" class="form-text text-muted">Preço do produto</small>
    </div>
    
    <div class="mb-3">
        <label for="" class="form-label">Categoria</label>
        @php
            use App\Models\Categoria;
            $categoria=Categoria::find($produto->categoria_id);
        @endphp

        <input type="text"
          class="form-control" name="categoria_id" id="" aria-describedby="helpId" placeholder="" value="{{$categoria->nome}}" readonly>
        <small id="helpId" class="form-text text-muted">Categoria do produto</small>
    </div>
  </div>

  <div class="row justify-content-center align-items-center g-2 mb-5 text-center">
    <span>Foto de {{$produto->nome}}</span>
    <img src="{{Storage::url($produto->foto)}}" alt="" style="width: 400px">
  </div>
</div>
@endsection