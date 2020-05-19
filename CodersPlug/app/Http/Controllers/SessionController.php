<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use Exception;

class SessionController extends Controller
{
    public function login (Request $r){	/* Metodo comparacion de datos */
        $msj="";
        $dbuser=Usuario::where('email','=',$r['login_email'])->first();
        try {	/* 	Excepcion en caso de que existan datos erroneos */
            if ((empty ($dbuser)) || !($this -> verifyPassword ($dbuser,$r['login_password']))){
                throw new Exception ('Email o contraseña incorrectos.',1);
            }
        }
        catch (Exception $e){
            $msj= $e->getMessage();
            return view('index', compact("msj"));
        }
        self::generateSession($dbuser, $r);
        return redirect('board');
    }

    private function generateSession ($dbuser, $r){
        $r -> session() -> put('status', 'conectado');
        $dbuser->password = "";
        $r -> session() -> put('sesion', $dbuser);
    }

    private function verifyPassword ($dbuser, $pass){
        return (password_verify($pass,$dbuser -> password));
    }

    public function logout (Request $request){							/* Funcion para el cierre de sesion */
        $request->session()->flush();
        return redirect('/');
    }

    public function verifySession (Request $request){
        $ok = false;
        if (($request->session()->has('status'))&&($request->session()->exists('status'))){
            if ($request->session()->get('status') == 'conectado')
                $ok = true;
        }
        return $ok;
    }

    public function getLoggedUser(Request $request){
        return $request->session()->get('sesion');
    }
}