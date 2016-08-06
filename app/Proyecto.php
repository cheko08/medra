<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    public function imagenes()
    {
    	return $this->hasMany('App\Imagen');
    }
}
