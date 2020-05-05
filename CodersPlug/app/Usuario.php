<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //public $table = "usuarios"; // Si la tabla no es el plural del nombre de la clase, especificar el nombre de la tabla.
    //public $id = "id";          // Si la columna id no se llama "id", especificar como se llama la columna.
    //public $timestamps = false; // Especificar si no tiene timestamps.
    public $guarded = [];         // Especificar los atributos protegidos en un array.

    public function rol(){
        return $this->belongsTo('App\Rol');
    }
    public function perfil(){
        return $this->belongsTo('App\Perfil');
    }
    public function posts(){
        return $this->hasMany('App\Post');
    }
}
