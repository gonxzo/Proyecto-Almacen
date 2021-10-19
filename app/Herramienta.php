<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Herramienta extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','descripcion','unidad','cantidad','idclasificacion','created_at','updated_at',
    ];
}
