<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gastoherramienta extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','idregpedido','idherramienta','cantidad','created_at','updated_at',
    ];
}
