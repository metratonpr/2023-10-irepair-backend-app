<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable =['numero','data_pedido', 'data_entrega', 'valor_frete', 
    'forma_pagamento_id', 'tipo_situacao_id','cliente_id','numero_ordem'];

    public function formaspagamento(){
        return $this->belongsTo(FormaPagamento::class,'forma_pagamento_id');
    }

    public function tipossituacao(){
        return $this->belongsTo(TipoSituacao::class,'tipo_situacao_id');
    }

    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }

    public function itenspedido(){
        return $this->hasMany(ItemPedido::class);
    }
}
