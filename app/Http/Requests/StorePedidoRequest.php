<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePedidoRequest extends FormRequest
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
            'numero' => 'required|number|unique:pedidos,numero',
            'data_pedido' =>'required|date', 
            'data_entrega'=>'required|date',  
            'valor_frete'=>'required|number',  
            'forma_pagamento_id' => 'required|exists:forma_pagamentos,id',
            'tipo_situacao_id'=> 'required|exists:tipo_situacaos,id',
            'cliente_id'=> 'required|exists:clientes,id',
            'numero_ordem' => 'nullable|integer',
            'itenspedido.*.pedido_id' => 'required|exists:pedidos,id',
            'itenspedido.*.modelo_id' => 'required|exists:modelos,id',
            'itenspedido.*.quantidade' => 'required|numeric',
            'itenspedido.*.preco_unitario' => 'required|numeric',
            'itenspedido.*.preco_total' => 'required|numeric',
        ];
    }
}
