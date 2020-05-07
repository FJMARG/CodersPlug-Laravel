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
            "string" => "El campo :attribute debe contener texto.",
            "image" => "El archivo a subir debe ser una imagen.",
            "mimes" => "El archivo debe ser .jpeg, .bmp o .png.",
            "size" => "El tamaño del archivo debe ser inferior o igual a :max KB.",
            "required" => "El campo :attribute es requerido.",
            "min" => "El campo :attribute debe tener un minimo de :min caracteres.",
            "email" => "El campo :attribute debe tener un email valido.",
            "digits_between" => "La opcion ingresada en :attribute no corresponde a una existente en el sistema.",
            "exists" => "El rol seleccionado no existe en el sistema.",
            "in" => "La opcion ingresada en :attribute no es valida.",
            "unique" => "El :attribute ya esta registrado en el sistema. ¿Olvidaste tu contraseña?"
        ];

        $this->validate($r,$rules,$msjs);
    }
    public function validarPost(Request $r){
        $rules = [
            "titulo" => "required | string | min:3",
            "post" => "required | string | min:3",
        ];

        $msjs = [
            "string" => "El campo :attribute debe contener texto.",
            "required" => "El campo :attribute es requerido.",
            "min" => "El campo :attribute debe tener un minimo de :min caracteres."
        ];

        $this->validate($r,$rules,$msjs);
    }
    public function validarExistePost(Request $r){
        $rules = [
            "post_id" => "required | numeric | exists:posts,id",
        ];

        $msjs = [
            "exists" => "El post no existe en el sistema.",
            "numeric" => "El id del post debe ser un numero.",
            "required" => "El id es requerido."
        ];

        $this->validate($r,$rules,$msjs);
    }

    public function validarComentario(Request $r){
        $rules = [
            "idpost" => "required | numeric | exists:posts,id",
            "comentario" => "required | string | min:3",
        ];

        $msjs = [
            "exists" => "El post no existe en el sistema.",
            "numeric" => "El id del post debe ser un numero.",
            "required" => "El campo :attribute es requerido.",
            "string" => "El campo :attribute debe ser un string.",
            "min" => "El campo :attribute debe tener un minimo de :min caracteres."
        ];

        $this->validate($r,$rules,$msjs);
    }

    public function validarEliminarPost(Request $r){
        $rules = [
            "id" => "required | numeric | exists:posts,id",
        ];

        $msjs = [
            "exists" => "El post no existe en el sistema.",
            "numeric" => "El id del post debe ser un numero.",
            "required" => "El campo :attribute es requerido.",
        ];

        $this->validate($r,$rules,$msjs);
    }

    public function validarEditarPost(Request $r){
        $rules = [
            "id" => "required | numeric | exists:posts,id",
            "titulo" => "required | string | min:3",
            "texto" => "required | string | min:3",
        ];

        $msjs = [
            "exists" => "El post no existe en el sistema.",
            "numeric" => "El id del post debe ser un numero.",
            "required" => "El campo :attribute es requerido.",
            "string" => "El campo :attribute debe ser un string.",
            "min" => "El campo :attribute debe tener un minimo de :min caracteres."
        ];

        $this->validate($r,$rules,$msjs);
    }

}
