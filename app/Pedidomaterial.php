<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedidomaterial extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','idregpedido','idmaterial','cantidad',
    ];
}
