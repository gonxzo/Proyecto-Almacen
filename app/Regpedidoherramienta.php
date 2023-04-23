<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regpedidoherramienta extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','idtrabajador','detalle',
    ];
}
