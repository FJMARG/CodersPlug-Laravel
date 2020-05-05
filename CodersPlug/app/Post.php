<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //public $table = "posts"; // Si la tabla no es el plural del nombre de la clase, especificar el nombre de la tabla.
    //public $id = "id";          // Si la columna id no se llama "id", especificar como se llama la columna.
    //public $timestamps = false; // Especificar si no tiene timestamps.
    public $guarded = [];         // Especificar los atributos protegidos en un array.

    public function usuario(){
        return $this->belongsTo('App\Usuario');
    }

    public function comentarios(){
        return $this->hasMany('App\Post','post_id');
    }

    public function post(){
        return $this->belongsTo('App\Post');
    }
}
