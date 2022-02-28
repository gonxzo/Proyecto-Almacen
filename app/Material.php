<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','descripcion','unidad','cantidad','created_at','updated_at',
    ];
   
}
