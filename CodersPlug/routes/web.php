<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// GET

Route::get('/', function () {
    return view('index');
});
Route::get('/preguntas', function () {
    return view('preguntas');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/board', "BoardController@mostrar")->middleware('autorizacion');
Route::get('/logout', "SessionController@logout")->middleware('autorizacion');
Route::get('/verDetallesPost/{id}', "PostController@show")->middleware('autorizacion');
Route::get('/deletePostForm/{id}', "PostController@showDeleteConfirm")->middleware('autorizacion');
Route::get('/editPostForm/{id}', "PostController@editForm")->middleware('autorizacion');

// POST

Route::post('/contact', "ContactController@create");
Route::post('/register', "RegisterController@registrar");
Route::post('/login', "SessionController@login");
Route::post('/addPost', "BoardController@addPost")->middleware('autorizacion');
Route::post('/agregarComentario', "PostController@addComment")->middleware('autorizacion');
Route::post('/deletePost', "PostController@delete")->middleware('autorizacion');
Route::post('/editPost', "PostController@edit")->middleware('autorizacion');
