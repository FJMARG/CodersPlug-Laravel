<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create(){
      $msj = "¡En breve nos pondremos en contacto con usted!";

      return view('contact', compact("msj"));
    }
}
