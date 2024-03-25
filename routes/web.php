<?php

use App\Http\Controllers\Principal\HomeController;
use App\Http\Controllers\Admin\UsuarioController;
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
?>