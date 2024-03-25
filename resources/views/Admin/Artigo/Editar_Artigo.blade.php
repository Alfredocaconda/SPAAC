@extends('Admin.layout.app')

@section('titulo','Admin')

@section('links')
@include('Admin.layout.links.links')
@endsection

@section('conteudo')
<h1>Editar os dados do artigo{{$username->id}}</h1>
          <section class="content">
    <div class="container">
        <!--LINHA-->
        <div class="row">
        <div class="col">
     <form action="{{route('Artigo_Cientifico.update', $username->id)}}" method="POST" enctype="multipart/form-data" class="row g-3">
      <!--inserindo um token para sabermos se os valores estao sendo enviados-->
      <!--<input type="text" value="put" name="_method">-->
      <!--criando token de forma automatica-->
      @csrf()
      @method('PUT')
     <div class="col-md-6">
    <label for="titulo" class="form-label">INSTITUIÇÃO</label>
    <input type="text" class="form-control" name="titulo" id="inputEmail4" 
     placeholder="DIGITE AQUI A INSTITUIÇÃO" value="{{$username->titulo}}">
  </div>
  <div class="col-md-6">
    <label for="resumo" class="form-label">NACIONALIDADE</label>
    <input type="text" class="form-control" id="inputAddress" name="resumo" 
    placeholder="NACIONALIDADE" value="{{$username->resumo}}">
  </div>
  <div class="col-md-6">
    <label for="volume" class="form-label">GRAU ACADEMICO</label>
    <input type="text" class="form-control" id="inputAddress" name="volume" 
    placeholder="DIGITE AQUI O GRAU ACADEMICO"value="{{$username->volume}}" >
  </div>
  <div class="col-md-6">
    <label for="id_categoria" class="form-label">usuario</label>
    <input type="number" class="form-control" id="inputAddress" name="id_categoria" 
    placeholder="adicionar o usuario" value="{{$username->id_categoria}}">
  </div>
  <div class="col-md-6">
    <label for="id_autores" class="form-label">usuario</label>
    <input type="number" class="form-control" id="inputAddress" name="id_autores" 
    placeholder="adicionar o usuario" value="{{$username->id_autores}}">
  </div>
  <div class="col-md-6">
    <label for="id_data" class="form-label">usuario</label>
    <input type="number" class="form-control" id="inputAddress" name="id_data" 
    placeholder="adicionar o usuario" value="{{$username->id_data}}">
  </div>
  <div class="col-md-6">
    <label for="id_palavra_chave" class="form-label">usuario</label>
    <input type="number" class="form-control" id="inputAddress" name="id_palavra_chave" 
    placeholder="adicionar o usuario" value="{{$username->id_palavra_chave}}">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Guardar</button>
  </div>  
        </div>
     </div>
    </div>
       
    </section>
  @endsection
