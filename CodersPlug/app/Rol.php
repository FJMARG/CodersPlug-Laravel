<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    public $table = "roles"; // Si la tabla no es el plural del nombre de la clase, especificar el nombre de la tabla.
    //public $id = "id";          // Si la columna id no se llama "id", especificar como se llama la columna.
    public $timestamps = false; // Especificar si no tiene timestamps.
    public $guarded = ["id","nombre"];         // Especificar los atributos protegidos en un array.

    public function usuario(){
        return $this->hasOne('App\Usuario');
    }
}
