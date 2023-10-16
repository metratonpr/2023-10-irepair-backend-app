<?php

namespace App\Http\Controllers;

use App\Models\TipoSituacao;
use App\Http\Requests\StoreTipoSituacaoRequest;
use App\Http\Requests\UpdateTipoSituacaoRequest;

class TipoSituacaoController extends Controller
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
     * @param  \App\Http\Requests\StoreTipoSituacaoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTipoSituacaoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipoSituacao  $tipoSituacao
     * @return \Illuminate\Http\Response
     */
    public function show(TipoSituacao $tipoSituacao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TipoSituacao  $tipoSituacao
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoSituacao $tipoSituacao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTipoSituacaoRequest  $request
     * @param  \App\Models\TipoSituacao  $tipoSituacao
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTipoSituacaoRequest $request, TipoSituacao $tipoSituacao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoSituacao  $tipoSituacao
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoSituacao $tipoSituacao)
    {
        //
    }
}
