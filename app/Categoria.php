<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';
    protected $fillable = [
    	'id', 'nombre', 'slug', 'imagen'
    ];	

    public function articulos()
    {
    	return $this->hasMany('App\Articulo');
    }
}
