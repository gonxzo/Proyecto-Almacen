<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','idusuario','idproyecto','cargo','fecha','created_at','updated_at',
    ];
}
