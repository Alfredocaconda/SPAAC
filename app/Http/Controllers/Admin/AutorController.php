<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Autor;
use App\Models\usuario;
use Illuminate\Http\Request;

class AutorController
{
    
  /**
     * Display a listing of the resource.
     */
    //listar todos os Autors cadastrados
    public function index(Autor $username)
    {
        //
        $valor=$username->all();
        return view('admin/Autor/Listar_Autor',compact('valor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view ('admin/Autor/Cadastrar_Autor');
    }

    /**
     * Store a newly created resource in storage.
     */
    //codigo para cadastrar o Autor
    public function store(Request $request,Autor $username)
    {
        $username->instituicao_vinculado=$request->instituicao_vinculado;
        $username->nacionalidade=$request->nacionalidade;
        $username->grau_academico=$request->grau_academico;
        $username->usuario_id =$request->usuario_id;
        $username->save();
        
       return redirect()->route('autor.index');
    }

    /**
     * Display the specified resource.
     */
    //funcao para pegar o valor da id que se pretende editar

    public function show( string|int $codigo)
    {
        //Autor::find($codigo);
        //Autor::where('id',$codigo)->first();
        //comparacao
        //Autor::where('id','=', $codigo)->first();

        //condicao para saber se foi inserido o Autor que se pretende editar
        if (!$username=autor::find($codigo)) {
            # returna da pagina de onde veio
            return redirect()->back();
        }
        return view ('admin/Autor/show_Autor', compact('username'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Autor $username, string| int $codigo)
    {
        //
         //condicao para saber se foi inserido o Autor que se pretende editar
         if (!$username=$username->where('id',$codigo)->first()) {
            # returna da pagina de onde veio
            return back();
        }
        //returna a pagina do Autor pegando a funcao do edit
        return view ('admin/Autor/Editar_Autor', compact('username'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Autor $username, string $codigo)
    {
        //dd($codigo);
        //condicao para saber se foi inserido o Autor que se pretende editar
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
            'instituicao_vinculado',
            'nacionalidade',
            'grau_academico',
            'usuario_id'
                ]));
        return redirect()->route('autor.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    //funcao para apagar os dados do Autor
    public function destroy(string| int $codigo)
    {
        //
        //condicao para saber se foi inserido o Autor que se pretende editar
        if (!$username=Autor::find($codigo)) {
            # returna da pagina de onde veio
            return back();
        }
        $username->delete();
        return redirect()->route('autor.index');
       
       
    }
}