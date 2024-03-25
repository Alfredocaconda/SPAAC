<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController 
{
 /**
     * Display a listing of the resource.
     */
    //listar todos os usuarios cadastrados
    public function index(usuario $username)
    {
        //
        $valor=$username->all();
        return view('admin/Usuario/Listar_usuario',compact('valor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view ('admin/Usuario/Cadastrar_usuario');
    }

    /**
     * Store a newly created resource in storage.
     */
    //codigo para cadastrar o usuario
    public function store(Request $request,usuario $username)
    {
        //pegar todos os dados
        $dados=$request->all();
        //inserir todos os dados na base de dados por intermedio do modelo usuario
       $username->create($dados);
       //para pegar o id
       #$username->id;
       //depois de cadastrar retonar a pagina listar
       return redirect()->route('usuario.index');
    }

    /**
     * Display the specified resource.
     */
    //funcao para pegar o valor da id que se pretende editar

    public function show( string|int $codigo)
    {
        //Usuario::find($codigo);
        //usuario::where('id',$codigo)->first();
        //comparacao
        //usuario::where('id','=', $codigo)->first();

        //condicao para saber se foi inserido o usuario que se pretende editar
        if (!$username=usuario::find($codigo)) {
            # returna da pagina de onde veio
            return redirect()->back();
        }
        return view ('admin/Usuario/show', compact('username'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(usuario $username, string| int $codigo)
    {
        //
         //condicao para saber se foi inserido o usuario que se pretende editar
         if (!$username=$username->where('id',$codigo)->first()) {
            # returna da pagina de onde veio
            return back();
        }
        //returna a pagina do usuario pegando a funcao do edit
        return view ('admin/Usuario/Editar_usuario', compact('username'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, usuario $username, string $codigo)
    {
        //dd($codigo);
        //condicao para saber se foi inserido o usuario que se pretende editar
         if (!$username=$username->find($codigo)) {
            # returna da pagina de onde veio
            return back();
        }
        //$valor->nome=$request->nome;
        //$valor->email=$request->email;
        //$valor->senha=$request->senha;
        //$valor->tipo=$request->tipo;
        //$valor->save();
        $username->update($request->only([
            'nome',
            'email',
            'senha',
            'tipo'
        ]));
        return redirect()->route('usuario.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    //funcao para apagar os dados do usuario
    public function destroy(string| int $codigo)
    {
        //
        //condicao para saber se foi inserido o usuario que se pretende editar
        if (!$username=usuario::find($codigo)) {
            # returna da pagina de onde veio
            return back();
        }
        $username->delete();
        return redirect()->route('usuario.index');
    }
}