<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gastomaterial extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','idregpedido','idmaterial','cantidad','created_at','updated_at',
    ];
}
