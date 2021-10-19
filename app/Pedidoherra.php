<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedidoherra extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','idph','herramienta','cantidad',
    ];
}
