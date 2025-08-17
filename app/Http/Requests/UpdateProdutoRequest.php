<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProdutoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $produtoId = $this->route('produto')?->id ?? null;

        return [
            'sku'   => 'sometimes|required|string|max:50|unique:produtos, sku' .$produtoId,
            'nome'  => 'sometimes|required|string|max:255',
            'descricao' => 'nullable|string',
            'categoria' => 'nullable|string|max:255',
            'preco'     => 'sometimes|required|numeric|min:0',
            'fornecedor'=> 'nullable|string|max:255',
        ];
    }
}
