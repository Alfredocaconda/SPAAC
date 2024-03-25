@extends('Admin.layout.app')

@section('titulo','Admin')

@section('links')
@include('Admin.layout.links.links')
@endsection

@section('conteudo')
          <section class="content">
    <div class="container">
        <!--LINHA-->
        <div class="row">
        <div class="col">
     <form action="{{ route('autor.store')}}" method="Post" enctype="multipart/form-data" class="row g-3">
      <!--inserindo um token para sabermos se os valores estao sendo enviados-->
      <!--<input type="hidden" value="{{csrf_token()}}" name="_token">-->
      <!--criando token de forma automatica-->
      @csrf()
      <div class="col-md-6">
    <label for="instituicao_vinculado" class="form-label">INSTITUIÇÃO</label>
    <input type="text" class="form-control" name="instituicao_vinculado" id="inputEmail4" 
     placeholder="DIGITE AQUI A INSTITUIÇÃO" >
  </div>
  <div class="col-md-6">
    <label for="nacionalidade" class="form-label">NACIONALIDADE</label>
    <input type="text" class="form-control" id="inputAddress" name="nacionalidade" 
    placeholder="NACIONALIDADE" >
  </div>
  <div class="col-md-6">
    <label for="grau_academico" class="form-label">GRAU ACADEMICO</label>
    <input type="text" class="form-control" id="inputAddress" name="grau_academico" 
    placeholder="DIGITE AQUI O GRAU ACADEMICO" >
  </div>
  <div class="col-md-6">
    <label for="usuario_id" class="form-label">usuario</label>
    <input type="number" class="form-control" id="inputAddress" name="usuario_id" 
    placeholder="adicionar o usuario" >
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Guardar</button>
  </div>
</form>  
        </div>
     </div>
    </div>
       
    </section>
  @endsection