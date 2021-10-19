<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','idtrab','material','cantidad',
    ];
}
