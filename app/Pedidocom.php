<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedidocom extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','idtrab','asunto',
    ];
}
