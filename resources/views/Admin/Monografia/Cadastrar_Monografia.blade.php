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
          <h1>MONOGRAFIA</h1>
     <form action="{{ route('Monografia.store')}}" method="Post" enctype="multipart/form-data" class="row g-3">
      <!--inserindo um token para sabermos se os valores estao sendo enviados-->
      <!--<input type="hidden" value="{{csrf_token()}}" name="_token">-->
      <!--criando token de forma automatica-->
      @csrf()
      <div class="col-md-6">
    <label for="titulo_monografia" class="form-label">titulo_monografia</label>
    <input type="text" class="form-control" name="titulo_monografia" id="inputEmail4" 
     placeholder="titulo_monografia" >
  </div>
  <div class="col-md-6">
    <label for="instituicao_ensino" class="form-label">instituicao_ensino</label>
    <input type="text" class="form-control" id="inputAddress" name="instituicao_ensino" 
    placeholder="instituicao_ensino" >
  </div>
  <div class="col-md-6">
    <label for="resumo" class="form-label">resumo</label>
    <input type="text" class="form-control" id="inputAddress" name="resumo" 
    placeholder="resumo" >
  </div>
  <div class="col-md-6">
    <label for="id_categoria" class="form-label">id_categoria</label>
    <input type="number" class="form-control" id="inputAddress" name="id_categoria" 
    placeholder="id_categoria" >
  </div>
  <div class="col-md-6">
    <label for="id_autores" class="form-label">id_autores</label>
    <input type="number" class="form-control" id="inputAddress" name="id_autores" 
    placeholder="id_autores" >
  </div>
  <div class="col-md-6">
    <label for="id_data" class="form-label">id_data</label>
    <input type="number" class="form-control" id="inputAddress" name="id_data" 
    placeholder="id_data" >
  </div>
  <div class="col-md-6">
    <label for="id_palavra_chave" class="form-label">id_palavra_chave</label>
    <input type="number" class="form-control" id="inputAddress" name="id_palavra_chave" 
    placeholder="id_palavra_chave o usuario" >
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