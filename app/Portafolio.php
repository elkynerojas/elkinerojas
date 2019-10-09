<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portafolio extends Model
{
    protected $table = 'portafolios';

    protected $fillable = [
    	'id', 'nombre', 'descripcion', 'imagen'
    ];
}
