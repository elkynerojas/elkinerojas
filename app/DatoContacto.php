<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatoContacto extends Model
{
    protected $table = 'datos_contacto';

    protected $fillable = [
    	'id', 'direccion', 'telefono', 'email'
    ];
}
