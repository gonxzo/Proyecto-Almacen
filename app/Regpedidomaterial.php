<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regpedidomaterial extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','idtrabajador','detalle',
    ];
}
