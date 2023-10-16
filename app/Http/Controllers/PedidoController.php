<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Http\Requests\StorePedidoRequest;
use App\Http\Requests\UpdatePedidoRequest;
use App\Models\ItemPedido;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedidos = Pedido::with('itenspedido')->get();

        return response()->json(['data' => $pedidos]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePedidoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePedidoRequest $request)
    {
        $pedidoData = $request->only(['numero','data_pedido', 'data_entrega', 'valor_frete', 
        'forma_pagamento_id', 'tipo_situacao_id','cliente_id','numero_ordem']);
        $detalhesPedidoData = $request->input('itenspedido');

        $pedido = Pedido::create($pedidoData);

        foreach ($detalhesPedidoData as $detalheData) {
            ItemPedido::create([
                'pedido_id' => $pedido->id,
                'modelo_id' => $detalheData['modelo_id'],
                'produto_id' => $detalheData['produto_id'],
                'quantidade' => $detalheData['quantidade'],
                'preco_unitario' => $detalheData['preco_unitario'],
                'preco_total' => $detalheData['preco_total'],
            ]);
        }
        // Retorna o pedido com os detalhes do pedido
        $pedido->load('itenspedido'); // Certifique-se de que a relação esteja definida no modelo Pedido
        return response()->json($pedido, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pedido = Pedido::with('itenspedido')->find($id);

        if (!$pedido) {
            return response()->json(['message' => 'Pedido não encontrado'], 404);
        }

        return response()->json($pedido, 200);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePedidoRequest  $request
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePedidoRequest $request, $id)
    {
       // Verifique se o pedido existe antes de continuar
       $pedido = Pedido::find($id);

       if (!$pedido) {
           return response()->json(['message' => 'Pedido não encontrado'], 404);
       }

       // Atualize os campos do pedido
       $pedido->update($request->only(['numero','data_pedido', 'data_entrega', 'valor_frete', 
       'forma_pagamento_id', 'tipo_situacao_id','cliente_id','numero_ordem']));

       // Atualize ou crie detalhes do pedido com base nos dados enviados
       foreach ($request->input('detalhes_pedido') as $detalheData) {
           // Verifique se a chave 'id' está presente no array $detalheData antes de usá-la
           $detalheId = isset($detalheData['id']) ? $detalheData['id'] : null;

           $pedido->detalhesPedido()->updateOrCreate(
               ['id' => $detalheId], // Use o ID se estiver presente
               [
                ItemPedido::create([
                    'pedido_id' => $pedido->id,
                    'modelo_id' => $detalheData['modelo_id'],
                    'produto_id' => $detalheData['produto_id'],
                    'quantidade' => $detalheData['quantidade'],
                    'preco_unitario' => $detalheData['preco_unitario'],
                    'preco_total' => $detalheData['preco_total'],
                ])
               ]
           );
       }

       // Carregue os detalhes do pedido após a atualização
       $pedido->load('itenspedido');

       return response()->json($pedido);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pedido = Pedido::find($id);

        if (!$pedido) {
            return response()->json(['message' => 'Pedido não encontrado!'], 404);
        }

        // Tente excluir os detalhes do pedido
        $deletedDetalhes = ItemPedido::where('pedido_id', $pedido->id)->delete();

        // Verifique se os detalhes do pedido foram excluídos com sucesso
        if ($deletedDetalhes === false) {
            return response()->json(['message' => 'Falha ao excluir detalhes do pedido.'], 500);
        }

        // Tente excluir o pedido
        if ($pedido->delete()) {
            return response()->json(['message' => 'Pedido deletado com sucesso!'], 200);
        } else {
            return response()->json(['message' => 'Falha ao excluir o pedido.'], 500);
        }
    }
}
