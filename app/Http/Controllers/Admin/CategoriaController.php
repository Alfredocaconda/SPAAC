<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController
{
  /**
     * Display a listing of the resource.
     */
    //listar todos os Categorias cadastrados
    public function index(categoria $username)
    {
        //
        $valor=$username->all();
        return view('admin/Categoria/Listar_Categoria',compact('valor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view ('admin/Categoria/Cadastrar_Categoria');
    }

    /**
     * Store a newly created resource in storage.
     */
    //codigo para cadastrar o Categoria
    public function store(Request $request,categoria $username)
    {
        //pegar todos os dados
        $dados=$request->all();
        //inserir todos os dados na base de dados por intermedio do modelo Categoria
       $username->create($dados);
       //para pegar o id
       #$username->id;
       //depois de cadastrar retonar a pagina listar
       return redirect()->route('categoria.index');
    }

    /**
     * Display the specified resource.
     */
    //funcao para pegar o valor da id que se pretende editar

    public function show( string|int $codigo)
    {
        //Categoria::find($codigo);
        //Categoria::where('id',$codigo)->first();
        //comparacao
        //Categoria::where('id','=', $codigo)->first();

        //condicao para saber se foi inserido o Categoria que se pretende editar
        if (!$username=Categoria::find($codigo)) {
            # returna da pagina de onde veio
            return redirect()->back();
        }
        return view ('admin/Categoria/show_Categoria', compact('username'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categoria $username, string| int $codigo)
    {
        //
         //condicao para saber se foi inserido o Categoria que se pretende editar
         if (!$username=$username->where('id',$codigo)->first()) {
            # returna da pagina de onde veio
            return back();
        }
        //returna a pagina do Categoria pegando a funcao do edit
        return view ('admin/Categoria/Editar_Categoria', compact('username'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categoria $username, string $codigo)
    {
        //dd($codigo);
        //condicao para saber se foi inserido o Categoria que se pretende editar
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
            'nome_categoria',
            'tipo_categoria'
        ]));
        return redirect()->route('categoria.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    //funcao para apagar os dados do Categoria
    public function destroy(string| int $codigo)
    {
        //
        //condicao para saber se foi inserido o Categoria que se pretende editar
        if (!$username=Categoria::find($codigo)) {
            # returna da pagina de onde veio
            return back();
        }
        $username->delete();
        return redirect()->route('categoria.index');
    }
}