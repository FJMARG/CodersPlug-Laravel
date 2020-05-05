<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function show(Request $r, $id){
        $usuario = app(SessionController::class) -> getLoggedUser($r);
        $post = Post::find($id);
        return view('comments', compact('usuario','post'));
    }
    public function addComment(Request $r){
        $usuario = app(SessionController::class) -> getLoggedUser($r);
        $comentario = new Post();
        $comentario -> post_id = $r['idpost'];
        $comentario -> texto = $r['comentario'];
        $comentario -> usuario_id = $usuario->id;
        $comentario -> titulo = $usuario -> nombre." ".$usuario -> apellido;
        $comentario -> save();
        return redirect('/verDetallesPost/'.$r['idpost']);
    }
    public function showDeleteConfirm(Request $r, $id){
        $usuario = app(SessionController::class) -> getLoggedUser($r);
        $post = Post::find($id);
        return view('confirmDeletePost', compact('usuario','post'));
    }
    public function editForm(Request $r, $id){
        $usuario = app(SessionController::class) -> getLoggedUser($r);
        $post = Post::find($id);
        return view('editPost', compact('usuario','post'));
    }
    public function delete(Request $r){
        $post = Post::find($r['id']);
        $post -> delete();
        return redirect('/board');
    }
    public function edit(Request $r){
        $post = Post::find($r['id']);
        $post -> texto = $r['texto'];
        $post -> titulo = $r['titulo'];
        $post -> save();
        return redirect('/verDetallesPost/'.$r['id']);
    }
}
