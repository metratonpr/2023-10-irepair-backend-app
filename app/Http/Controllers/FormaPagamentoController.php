<?php

namespace App\Http\Controllers;

use App\Models\FormaPagamento;
use App\Http\Requests\StoreFormaPagamentoRequest;
use App\Http\Requests\UpdateFormaPagamentoRequest;

class FormaPagamentoController extends Controller
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
     * @param  \App\Http\Requests\StoreFormaPagamentoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFormaPagamentoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FormaPagamento  $formaPagamento
     * @return \Illuminate\Http\Response
     */
    public function show(FormaPagamento $formaPagamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FormaPagamento  $formaPagamento
     * @return \Illuminate\Http\Response
     */
    public function edit(FormaPagamento $formaPagamento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFormaPagamentoRequest  $request
     * @param  \App\Models\FormaPagamento  $formaPagamento
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFormaPagamentoRequest $request, FormaPagamento $formaPagamento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FormaPagamento  $formaPagamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(FormaPagamento $formaPagamento)
    {
        //
    }
}
