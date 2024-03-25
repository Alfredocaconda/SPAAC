@extends('Admin.layout.app')

@section('titulo','Admin')

@section('links')
@include('Admin.layout.links.links')
@endsection

@section('conteudo')
<h1>Editar os dados do categoria{{$username->id}}</h1>
          <section class="content">
    <div class="container">
        <!--LINHA-->
        <div class="row">
        <div class="col">
     <form action="{{route('categoria.update', $username->id)}}" method="POST" enctype="multipart/form-data" class="row g-3">
      <!--inserindo um token para sabermos se os valores estao sendo enviados-->
      <!--<input type="text" value="put" name="_method">-->
      <!--criando token de forma automatica-->
      @csrf()
      @method('PUT')
      <div class="col-md-6">
    <label for="nome_categoria" class="form-label">NOME COMPLETO</label>
    <input type="text" class="form-control" name="nome_categoria" id="inputEmail4" 
     placeholder="DIGITE AQUI O SEU NOME" value="{{$username->nome_categoria}}">
  </div>
  <div class="col-md-6">
    <label for="tipo_categoria" class="form-label">EMAIL</label>
    <input type="text" class="form-control" id="inputAddress" name="tipo_categoria" 
    placeholder="DIGITE AQUI O SEU E-MAIL" value="{{$username->tipo_categoria}}" >
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