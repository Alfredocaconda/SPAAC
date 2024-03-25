@extends('Admin.layout.app')

@section('titulo','Admin')

@section('links')
@include('Admin.layout.links.links')
@endsection

@section('conteudo')
<h1>Editar os dados do autor{{$username->id}}</h1>
          <section class="content">
    <div class="container">
        <!--LINHA-->
        <div class="row">
        <div class="col">
     <form action="{{route('autor.update', $username->id)}}" method="POST" enctype="multipart/form-data" class="row g-3">
      <!--inserindo um token para sabermos se os valores estao sendo enviados-->
      <!--<input type="text" value="put" name="_method">-->
      <!--criando token de forma automatica-->
      @csrf()
      @method('PUT')
     <div class="col-md-6">
    <label for="instituicao_vinculado" class="form-label">INSTITUIÇÃO</label>
    <input type="text" class="form-control" name="instituicao_vinculado" id="inputEmail4" 
     placeholder="DIGITE AQUI A INSTITUIÇÃO" value="{{$username->instituicao_vinculado}}">
  </div>
  <div class="col-md-6">
    <label for="nacionalidade" class="form-label">NACIONALIDADE</label>
    <input type="text" class="form-control" id="inputAddress" name="nacionalidade" 
    placeholder="NACIONALIDADE" value="{{$username->nacionalidade}}">
  </div>
  <div class="col-md-6">
    <label for="grau_academico" class="form-label">GRAU ACADEMICO</label>
    <input type="text" class="form-control" id="inputAddress" name="grau_academico" 
    placeholder="DIGITE AQUI O GRAU ACADEMICO"value="{{$username->grau_academico}}" >
  </div>
  <div class="col-md-6">
    <label for="usuario_id" class="form-label">usuario</label>
    <input type="number" class="form-control" id="inputAddress" name="usuario_id" 
    placeholder="adicionar o usuario" value="{{$username->usuario_id}}">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Guardar</button>
  </div>  
        </div>
     </div>
    </div>
       
    </section>
  @endsection