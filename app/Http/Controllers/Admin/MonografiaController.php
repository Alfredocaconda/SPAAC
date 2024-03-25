<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Monografia;
use Illuminate\Http\Request;

class MonografiaController
{      /**
         * Display a listing of the resource.
         */
        //listar todos os Autors cadastrados
        public function index()
        {
            //
            $valor= Monografia::all();
            return view('admin/Monografia/Listar_Monografia',compact('valor'));
        }
    
        /**
         * Show the form for creating a new resource.
         */
        public function create()
        {
            //
            return view ('admin/Monografia/Cadastrar_Monografia');
        }
    
        /**
         * Store a newly created resource in storage.
         */
        //codigo para cadastrar o Autor
        public function store(Request $request,Monografia $username)
        {
            //pegar todos os dados
        $dados=$request->all();
        //inserir todos os dados na base de dados por intermedio do modelo Categoria
       $username->create($dados);
       //para pegar o id
       #$username->id;
       //depois de cadastrar retonar a pagina listar           
           return redirect()->route('Monografia.index');
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
            if (!$username=Monografia::find($codigo)) {
                # returna da pagina de onde veio
                return redirect()->back();
            }
            return view ('admin/Monografia/show_Monografia', compact('username'));
    
        }
    
        /**
         * Show the form for editing the specified resource.
         */
        public function edit(Monografia $username, string| int $codigo)
        {
            //
             //condicao para saber se foi inserido o Autor que se pretende editar
             if (!$username=$username->where('id',$codigo)->first()) {
                # returna da pagina de onde veio
                return back();
            }
            //returna a pagina do Autor pegando a funcao do edit
            return view ('admin/Monografia/Editar_Monografia', compact('username'));
        }
    
        /**
         * Update the specified resource in storage.
         */
        public function update(Request $request, Monografia $username, string $codigo)
        {
            //dd($codigo);
            //condicao para saber se foi inserido o Autor que se pretende editar
             if (!$username=$username->find($codigo)) {
                # returna da pagina de onde veio
                return back();
            }
            $username->update($request->only([
                'titulo_monografia',
        'instituicao_ensino',
        'resumo',
        'id_categoria',
        'id_autores',
        'id_data',
        'id_palavra_chave'
                    ]));
            return redirect()->route('Monografia.index');
        }
    
        /**
         * Remove the specified resource from storage.
         */
        //funcao para apagar os dados do Autor
        public function destroy(string| int $codigo)
        {
            //
            //condicao para saber se foi inserido o Autor que se pretende editar
            if (!$username=Monografia::find($codigo)) {
                # returna da pagina de onde veio
                return back();
            }
            $username->delete();
            return redirect()->route('Monografia.index');
           
           
        }
    }