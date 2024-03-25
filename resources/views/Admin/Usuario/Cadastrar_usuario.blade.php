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
     <form action="{{ route('usuario.store')}}" method="Post" enctype="multipart/form-data" class="row g-3">
      <!--inserindo um token para sabermos se os valores estao sendo enviados-->
      <!--<input type="hidden" value="{{csrf_token()}}" name="_token">-->
      <!--criando token de forma automatica-->
      @csrf()
      <div class="col-md-6">
    <label for="nome" class="form-label">NOME COMPLETO</label>
    <input type="text" class="form-control" name="nome" id="inputEmail4" 
     placeholder="DIGITE AQUI O SEU NOME" >
  </div>
  <div class="col-md-6">
    <label for="email" class="form-label">EMAIL</label>
    <input type="email" class="form-control" id="inputAddress" name="email" 
    placeholder="DIGITE AQUI O SEU E-MAIL" >
  </div>
  <div class="col-md-6">
    <label for="senha" class="form-label">SENHA</label>
    <input type="text" class="form-control" id="inputAddress" name="senha" 
    placeholder="DIGITE AQUI A SUA SENHA" >
  </div>
  <div class="col-md-6">
    <label for="tipo" class="form-label">TIPO</label>
    <input type="text" class="form-control" id="inputAddress" name="tipo" 
    placeholder="DIGITE AQUI O TIPO" >
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