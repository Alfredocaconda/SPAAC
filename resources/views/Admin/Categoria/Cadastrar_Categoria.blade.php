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
     <form action="{{ route('categoria.store')}}" method="Post" enctype="multipart/form-data" class="row g-3">
      <!--inserindo um token para sabermos se os valores estao sendo enviados-->
      <!--<input type="hidden" value="{{csrf_token()}}" name="_token">-->
      <!--criando token de forma automatica-->
      @csrf()
      <div class="col-md-6">
    <label for="nome_categoria" class="form-label">NOME COMPLETO</label>
    <input type="text" class="form-control" name="nome_categoria" id="inputEmail4" 
     placeholder="DIGITE AQUI O SEU NOME DA CATEGORIA" >
  </div>
  <div class="col-md-6">
    <label for="tipo_categoria" class="form-label">EMAIL</label>
    <input type="text" class="form-control" id="inputAddress" name="tipo_categoria" 
    placeholder="DIGITE AQUI O TIPO DE CATEGORIA" >
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