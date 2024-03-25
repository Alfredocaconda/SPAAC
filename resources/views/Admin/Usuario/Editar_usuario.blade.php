@extends('Admin.layout.app')

@section('titulo','Admin')

@section('links')
@include('Admin.layout.links.links')
@endsection

@section('conteudo')
<h1>Editar os dados do usuario{{$username->id}}</h1>
          <section class="content">
    <div class="container">
        <!--LINHA-->
        <div class="row">
        <div class="col">
     <form action="{{route('usuario.update', $username->id)}}" method="POST" enctype="multipart/form-data" class="row g-3">
      <!--inserindo um token para sabermos se os valores estao sendo enviados-->
      <!--<input type="text" value="put" name="_method">-->
      <!--criando token de forma automatica-->
      @csrf()
      @method('PUT')
      <div class="col-md-6">
    <label for="nome" class="form-label">NOME COMPLETO</label>
    <input type="text" class="form-control" name="nome" id="inputEmail4" 
     placeholder="DIGITE AQUI O SEU NOME" value="{{$username->nome}}">
  </div>
  <div class="col-md-6">
    <label for="email" class="form-label">EMAIL</label>
    <input type="email" class="form-control" id="inputAddress" name="email" 
    placeholder="DIGITE AQUI O SEU E-MAIL" value="{{$username->email}}" >
  </div>
  <div class="col-md-6">
    <label for="senha" class="form-label">SENHA</label>
    <input type="text" class="form-control" id="inputAddress" name="senha" 
    placeholder="DIGITE AQUI A SUA SENHA" value="{{$username->senha}}">
  </div>
  <div class="col-md-6">
    <label for="tipo" class="form-label">TIPO</label>
    <input type="text" class="form-control" id="inputAddress" name="tipo" 
    placeholder="DIGITE AQUI O TIPO" value="{{$username->tipo}}">
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