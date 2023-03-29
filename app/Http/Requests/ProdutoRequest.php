<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nome'=>'required|string',
            'descricao'=>'required|string',
            'preco'=>'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'nome.required'=>'É necessário inserir um nome ao produto',
            'nome.string'=>'Este campo precisa ser preenchido com string',

            'descricao.required'=>'É necessário inserir uma descricao ao produto',
            'descricao.string'=>'Este campo precisa ser preenchido com string',

            'preco.required'=>'É preciso inserir um valor padrão ao produto',
            'preco.number'=>'É preciso inserir um valor padrão ao produto',

        ];
    }
}
