<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HojaVida extends Model
{
    protected $table = 'hoja_vida';
    protected $fillable = [
    	'id', 'cuerpo'
    ];
}
