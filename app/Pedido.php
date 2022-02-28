<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','idpedidocom','material','cantidad',
    ];
}
