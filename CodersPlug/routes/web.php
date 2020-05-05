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

// POST

Route::post('/register', "RegisterController@registrar");