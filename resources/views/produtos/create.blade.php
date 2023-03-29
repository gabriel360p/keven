@extends('master')

@section('head')
@endsection

@section('navbar')
    
@endsection

@section('content')
    <div class="container">
        <form action="{{route('produtos.store')}}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="" class="form-label">Nome</label>
              <input type="text"
                class="form-control" name="nome" id="" aria-describedby="helpId" placeholder="">
              <small id="helpId" class="form-text text-muted">Nome do produto</small>
              
              @error('nome')
                  <span class="badge text-bg-warning">{{$message}}</span>
              @enderror

            </div>


            <div class="mb-3">
                <label for="" class="form-label">Descrição</label>
                <input type="text"
                  class="form-control" name="descricao" id="" aria-describedby="helpId" placeholder="">
                <small id="helpId" class="form-text text-muted">Descrição do produto</small>

                @error('descricao')
                <span class="badge text-bg-warning">{{$message}}</span>
                @enderror

              </div>
              
              <div class="mb-3">
                <label for="" class="form-label">Preço</label>
                <input type="number"
                  class="form-control" name="preco" id="" aria-describedby="helpId" placeholder="">
                <small id="helpId" class="form-text text-muted">Preço do produto</small>

                @error('preco')
                <span class="badge text-bg-warning">{{$message}}</span>
                @enderror

              </div>

              <div class="mb-3">
                <label for="" class="form-label">Categoria</label>
                <select class="form-select form-select-lg" name="categoria_id" id="" required>
                    @php
                        use App\Models\Categoria;
                        $categorias=Categoria::all();
                    @endphp

                    @forelse ($categorias as $categoria)
                        <option value="{{$categoria->id}}">{{$categoria->nome}}</option>    
                    @empty
                        <option class="badge text-bg-warning">Nenhuma categoria Cadastrada</option>
                    @endforelse

                </select>
              </div>

              @if(count($categorias)==0)
                <option class="badge text-bg-warning">Nenhuma categoria Cadastrada</option>
              @else
                <button class="btn btn-primary">Salvar</button>
              @endif
        </form>
    </div>
@endsection