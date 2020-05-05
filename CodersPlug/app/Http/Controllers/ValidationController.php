<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use Egulias\EmailValidator\EmailValidator;
use Egulias\EmailValidator\Validation\RFCValidation;
use Egulias\EmailValidator\Validation\DNSCheckValidation;

class ValidationController extends Controller
{
    public function validarRegistro(Request $r){
        $rules = [
            "foto" => "nullable | image | mimes:jpeg,bmp,png | max:5120",
            "nombre" => "required | string | min:3",
            "apellido" => "required | string | min:3",
            "email" => "required | email | unique:usuarios,email",
            "rol" => "required | digits_between:1,3 | exists:roles,id",
            "sexo" => "required | in:M,F",
            "password" => "required | string | min:6",
            "pregunta" => "required | digits_between:1,5",
            "respuesta" => "required | string | min:2"
        ];

        $msjs = [
            "string" => "El campo ingresado debe contener texto.",
            "image" => "El archivo a subir debe ser una imagen.",
            "mimes" => "El archivo debe ser .jpeg, .bmp o .png.",
            "size" => "El tamaño del archivo debe ser inferior o igual a :max KB.",
            "required" => "El campo es requerido.",
            "min" => "El campo debe tener un minimo de :min caracteres.",
            "email" => "El campo debe tener un email valido.",
            "digits_between" => "La opcion ingresada no corresponde a una existente en el sistema.",
            "exists" => "El rol seleccionado no existe en el sistema.",
            "in" => "La opcion ingresada no es valida.",
            "unique" => "El email ya esta registrado en el sistema. ¿Olvidaste tu contraseña?"
        ];

        $this->validate($r,$rules,$msjs);
    }
}
