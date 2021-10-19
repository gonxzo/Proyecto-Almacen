<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clasherramienta extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','descripcion','created_at','updated_at',
    ];
}
