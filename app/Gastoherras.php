<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gastoherras extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','idpedidoh','idherramienta','cantidad','created_at','updated_at',
    ];
}
