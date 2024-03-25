<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artigo_Cientifico;
use Illuminate\Http\Request;

class ArtigoCientificoController
{
      /**
         * Display a listing of the resource.
         */
        //listar todos os Autors cadastrados
        public function index()
        {
            //
            $valor= Artigo_Cientifico::all();
            return view('admin/Artigo/Listar_Artigo',compact('valor'));
        }
    
        /**
         * Show the form for creating a new resource.
         */
        public function create()
        {
            //
            return view ('admin/Artigo/Cadastrar_Artigo');
        }
    
        /**
         * Store a newly created resource in storage.
         */
        //codigo para cadastrar o Autor
        public function store(Request $request,Artigo_Cientifico $username)
        {
            //pegar todos os dados
        $dados=$request->all();
        //inserir todos os dados na base de dados por intermedio do modelo Categoria
       $username->create($dados);
       //para pegar o id
       #$username->id;
       //depois de cadastrar retonar a pagina listar           
           return redirect()->route('Artigo_Cientifico.index');
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
            if (!$username=Artigo_Cientifico::find($codigo)) {
                # returna da pagina de onde veio
                return redirect()->back();
            }
            return view ('admin/Artigo/show_Artigo', compact('username'));
    
        }
    
        /**
         * Show the form for editing the specified resource.
         */
        public function edit(Artigo_Cientifico $username, string| int $codigo)
        {
            //
             //condicao para saber se foi inserido o Autor que se pretende editar
             if (!$username=$username->where('id',$codigo)->first()) {
                # returna da pagina de onde veio
                return back();
            }
            //returna a pagina do Autor pegando a funcao do edit
            return view ('admin/Artigo/Editar_Artigo', compact('username'));
        }
    
        /**
         * Update the specified resource in storage.
         */
        public function update(Request $request, Artigo_Cientifico $username, string $codigo)
        {
            //dd($codigo);
            //condicao para saber se foi inserido o Autor que se pretende editar
             if (!$username=$username->find($codigo)) {
                # returna da pagina de onde veio
                return back();
            }
            $username->update($request->only([
                'titulo',
                'resumo',
                'volume',
                'id_categoria',
                'id_autores',
                'id_data',
                'id_palavra_chave'
                    ]));
            return redirect()->route('Artigo_Cientifico.index');
        }
    
        /**
         * Remove the specified resource from storage.
         */
        //funcao para apagar os dados do Autor
        public function destroy(string| int $codigo)
        {
            //
            //condicao para saber se foi inserido o Autor que se pretende editar
            if (!$username=Artigo_Cientifico::find($codigo)) {
                # returna da pagina de onde veio
                return back();
            }
            $username->delete();
            return redirect()->route('Artigo_Cientifico.index');
           
           
        }
    }