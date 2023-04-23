<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedidoherramienta extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','idregpedido','idherramienta','cantidad',
    ];
}
