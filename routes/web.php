<?php

use App\Http\Controllers\Principal\HomeController;
use App\Http\Controllers\Admin\UsuarioController;
use App\Http\Controllers\Admin\CategoriaController;
use App\Http\Controllers\Admin\AutorController;
use App\Http\Controllers\Admin\ArtigoCientificoController;
use App\Http\Controllers\Admin\MonografiaController;
use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;
#rota para deletar o usuario
Route::delete('/usuario/{id}',[UsuarioController::class,'destroy'])->name('usuario.destroy');
#rota para actualizar
Route::put('/usuario/{id}',[UsuarioController::class,'update'])->name('usuario.update');
#rota para editar cada usuario e ira exibir apenas o formulario
Route::get('/usuario/{id}/edit',[UsuarioController::class,'edit'])->name('usuario.edit');
#CODIGO PARA CADASTRAR O USUARIO
Route::get('/usuario/create',[UsuarioController::class,'create'])->name('usuario.create');
#rota que vai receber os parametros dinamicos para editar os usuario
Route::get('/usuario{id}',[UsuarioController::class,'show'])->name('usuario.show');
#Rota que ira levar todos os dados para ser cadastrado no banco de dados
Route::post('/usuario',[UsuarioController::class,'store'])->name('usuario.store');
#CODIGO PARA LISTAR OS DADOS DO USUARIO
Route::get('/usuario',[UsuarioController::class,'index'])->name('usuario.index');
#============================================================== rota da categoria========================

#rota para deletar o CATEGORIA
Route::delete('/categoria/{id}',[CategoriaController::class,'destroy'])->name('categoria.destroy');
#rota para actualizar
Route::put('/categoria/{id}',[CategoriaController::class,'update'])->name('categoria.update');
#rota para editar cada usuario e ira exibir apenas o formulario
Route::get('/categoria/{id}/edit',[CategoriaController::class,'edit'])->name('categoria.edit');
#CODIGO PARA CADASTRAR O USUARIO
Route::get('/categoria/create',[CategoriaController::class,'create'])->name('categoria.create');
#rota que vai receber os parametros dinamicos para editar os usuario
Route::get('/categoria{id}',[CategoriaController::class,'show'])->name('categoria.show');
#Rota que ira levar todos os dados para ser cadastrado no banco de dados
Route::post('/categoria',[CategoriaController::class,'store'])->name('categoria.store');
#CODIGO PARA LISTAR OS DADOS DO USUARIO
Route::get('/categoria',[CategoriaController::class,'index'])->name('categoria.index');
#========================== FIM DA ROTA DE CATEGORIA

#rota para deletar o CATEGORIA
Route::delete('/autor/{id}',[AutorController::class,'destroy'])->name('autor.destroy');
#rota para actualizar
Route::put('/autor/{id}',[AutorController::class,'update'])->name('autor.update');
#rota para editar cada usuario e ira exibir apenas o formulario
Route::get('/autor/{id}/edit',[AutorController::class,'edit'])->name('autor.edit');
#CODIGO PARA CADASTRAR O USUARIO
Route::get('/autor/create',[AutorController::class,'create'])->name('autor.create');
#rota que vai receber os parametros dinamicos para editar os usuario
Route::get('/autor{id}',[AutorController::class,'show'])->name('autor.show');
#Rota que ira levar todos os dados para ser cadastrado no banco de dados
Route::post('/autor',[AutorController::class,'store'])->name('autor.store');
#CODIGO PARA LISTAR OS DADOS DO USUARIO
Route::get('/autor',[AutorController::class,'index'])->name('autor.index');
#========================== FIM DA ROTA DE CATEGORIA

#rota para deletar o artigo
Route::delete('/artigo/{id}',[ArtigoCientificoController::class,'destroy'])->name('Artigo_Cientifico.destroy');
#rota para actualizar
Route::put('/artigo/{id}',[ArtigoCientificoController::class,'update'])->name('Artigo_Cientifico.update');
#rota para editar cada usuario e ira exibir apenas o formulario
Route::get('/artigo/{id}/edit',[ArtigoCientificoController::class,'edit'])->name('Artigo_Cientifico.edit');
#CODIGO PARA CADASTRAR O USUARIO
Route::get('/artigo/create',[ArtigoCientificoController::class,'create'])->name('Artigo_Cientifico.create');
#rota que vai receber os parametros dinamicos para editar os usuario
Route::get('/artigo{id}',[ArtigoCientificoController::class,'show'])->name('Artigo_Cientifico.show');
#Rota que ira levar todos os dados para ser cadastrado no banco de dados
Route::post('/artigo',[ArtigoCientificoController::class,'store'])->name('Artigo_Cientifico.store');
#CODIGO PARA LISTAR OS DADOS DO USUARIO
Route::get('/artigo',[ArtigoCientificoController::class,'index'])->name('Artigo_Cientifico.index');
#========================== FIM DA ROTA DE CATEGORIA
#rota para deletar o Monografia
Route::delete('/Monografia/{id}',[MonografiaController::class,'destroy'])->name('Monografia.destroy');
#rota para actualizar
Route::put('/Monografia/{id}',[MonografiaController::class,'update'])->name('Monografia.update');
#rota para editar cada usuario e ira exibir apenas o formulario
Route::get('/Monografia/{id}/edit',[MonografiaController::class,'edit'])->name('Monografia.edit');
#CODIGO PARA CADASTRAR O USUARIO
Route::get('/Monografia/create',[MonografiaController::class,'create'])->name('Monografia.create');
#rota que vai receber os parametros dinamicos para editar os usuario
Route::get('/Monografia{id}',[MonografiaController::class,'show'])->name('Monografia.show');
#Rota que ira levar todos os dados para ser cadastrado no banco de dados
Route::post('/Monografia',[MonografiaController::class,'store'])->name('Monografia.store');
#CODIGO PARA LISTAR OS DADOS DO USUARIO
Route::get('/Monografia',[MonografiaController::class,'index'])->name('Monografia.index');
#========================== FIM DA ROTA DE CATEGORIA


?>