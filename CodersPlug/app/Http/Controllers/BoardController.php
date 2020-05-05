<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BoardController extends Controller
{
    public function mostrar(Request $r){
        $usuario = app(SessionController::class) -> getLoggedUser($r);
        $posts = Post::whereNull('post_id')->orderBy('updated_at', 'desc')->get();
        return view('board', compact('usuario','posts'));
    }

    public function addPost(Request $r){
        $loggedUser = app(SessionController::class) -> getLoggedUser($r);
        $post = new Post();
        $post -> titulo = $r['titulo'];
        $post -> texto = $r['post'];
        $post -> usuario_id = $loggedUser->id;
        $post->save();
        return redirect('/board');
    }
}
