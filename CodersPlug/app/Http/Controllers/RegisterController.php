<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Perfil;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function registrar (Request $r){
        
        app(ValidationController::class)->validarRegistro($r);
        $url ="";
        $u = new Usuario();
        $u -> nombre = $r["nombre"];
        $u -> apellido = $r["apellido"];
        $u -> email = $r["email"];
        $u -> password = password_hash($r["password"],PASSWORD_DEFAULT);
        $u -> pregunta_secreta = $r["pregunta"];
        $u -> respuesta_pregunta_secreta = $r["respuesta"];
        $u -> rol_id = $r["rol"];
        if($r->hasFile('foto'))
            $url = $this->subirImagen($r->file("foto"),$u->email);
        else
            $url = "/img/profile/default.jpg";
        $p = new Perfil();
        $p -> url_foto = $url;
        $p -> sexo = $r['sexo'];
        DB::transaction(function() use ($u,$p){
            $p -> save();
            $u -> perfil_id = $p->id;
            $u -> save();
        });

        $msj = "¡Se ha registrado correctamente en el sistema!";

        return view('register', compact("msj"));
    }

    private function subirImagen($foto, $email){
        $dir = "/img/$email";
        $dir=$dir."/".basename($foto->store("public".$dir));
        return "/storage".$dir;
    }
}
