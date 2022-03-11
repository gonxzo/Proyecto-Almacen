<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gasto extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','idpedidocom','idmaterial','cantidad','created_at','updated_at',
    ];
}
