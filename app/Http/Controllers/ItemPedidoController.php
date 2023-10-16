<?php

namespace App\Http\Controllers;

use App\Models\ItemPedido;
use App\Http\Requests\StoreItemPedidoRequest;
use App\Http\Requests\UpdateItemPedidoRequest;

class ItemPedidoController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreItemPedidoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreItemPedidoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ItemPedido  $itemPedido
     * @return \Illuminate\Http\Response
     */
    public function show(ItemPedido $itemPedido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ItemPedido  $itemPedido
     * @return \Illuminate\Http\Response
     */
    public function edit(ItemPedido $itemPedido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateItemPedidoRequest  $request
     * @param  \App\Models\ItemPedido  $itemPedido
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateItemPedidoRequest $request, ItemPedido $itemPedido)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ItemPedido  $itemPedido
     * @return \Illuminate\Http\Response
     */
    public function destroy(ItemPedido $itemPedido)
    {
        //
    }
}
