@extends('master')

@section('head')
@endsection

@section('navbar')
    
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center g-2">
        <div class="col">
            <a id="" class="btn btn-primary" href="{{route('produtos.create')}}" role="button">Adicionar Produto</a>

        </div>
    </div>    
</div>
<div class="container mt-2">
    <div class="row justify-content-center align-items-center g-2">
        <div class="col">
            <div class="table-responsive">
                <table class="table table-primary">
                    <thead>
                        {{-- <tr> --}}
                            <th scope="col">Nome</th>
                            <th scope="col">Descricao</th>
                            <th scope="col">Preço</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Ação</th>
                        {{-- </tr> --}}
                    </thead>
                    <tbody>
                        @php
                            use App\Models\Categoria;
                            use App\Models\Produto;
                            $produtos = Produto::all();
                            $categorias = Categoria::all();
                        @endphp

                        @forelse ($produtos as $produto)
                            <tr class="">
                                <td>{{$produto->nome}}</td>
                                <td>{{$produto->descricao}}</td>
                                <td>{{$produto->preco}}</td>
                                @php
                                    $categoria=Categoria::find($produto->categoria_id);
                                @endphp
                                <td>{{$categoria->nome}}</td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-primary" href="{{route('produtos.show',$produto->id)}}">Show</a>
                                        <a class="btn btn-primary" href="{{route('produto.destroy',$produto->id)}}">Delete</a>
                                    </div>
                                </td>
                            @empty
                                <span class=" badge text-bg-warning">Nenhum produto encontrado</span>
                                
                            </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
            
        </div>
    </div>    
</div>
@endsection