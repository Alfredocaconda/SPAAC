<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('principal.Home.home');
});
Route::get('/autores', function () {
    return view('principal.Autores.autores');
});
Route::get('/artigos', function () {
    return view('principal.Artigos.artigos');
});
Route::get('/sobre', function () {
    return view('principal.Sobre.sobre');
});
Route::get('/admin', function () {
    return view('Admin.dashboard.home');
});
Route::get('/user', function () {
    return view('Admin.dashboard.user');
});
Route::get('/sobre', function () {
    return view('principal.Sobre.sobre');
});
Route::get('/sobre', function () {
    return view('principal.Sobre.sobre');
});
Route::get('/sobre', function () {
    return view('principal.Sobre.sobre');
});
