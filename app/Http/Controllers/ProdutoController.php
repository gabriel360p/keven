<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Http\Requests\ProdutoRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produtos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProdutoRequest $request)
    {
        if($request->foto->isValid()){
            $fileName = Hash::make($request->foto->getClientOriginalName()).'.'.$request->foto->getClientOriginalExtension();

            $foto=Storage::putFileAs('public',$request->foto,$fileName);


            // $imagem=$request->foto;
            // $imagemnome=$request->foto->getClientOriginalName();
            // $imagemextensao=$request->foto->getClientOriginalExtension();
            // $img=Hash::make($imagemnome)." ".$imagemextensao;
            // $foto=$request->foto->storeAs('public',$img);

            $produto = Produto::create([
                'nome'=>$request->nome,
                'descricao'=>$request->descricao,
                'categoria_id'=>$request->categoria_id,
                'preco'=>$request->preco,
                'foto'=>$foto,  
            ]);

            return redirect(route('dashboard'));

        }else{
            return back()->with('fileError','Arquivo Inválido');
        }
        return back()->with('storeError','Ocorreu algum erro ao salvar');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show(Produto $produto)
    {
        return view('produtos.show',['produto'=>$produto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit(Produto $produto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produto $produto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produto $produto)
    {
        Storage::delete($produto->foto);
        $produto->delete();
        return back();
    }
}
