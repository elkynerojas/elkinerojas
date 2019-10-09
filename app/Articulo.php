<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $table = 'articulos';

    protected $fillable = [
    	'id', 'titulo', 'extracto', 'cuerpo', 'imagen', 'categoria_id', 'slug'
    ];

    public function categoria()
    {
    	return $this->belongsTo('App\Categoria');
    }
}
