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
     <form action="Control/CadastroFuncionario.php" method="Post" enctype="multipart/form-data" class="row g-3">
      <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nome Completo</label>
    <input type="text" class="form-control" name="nome" id="inputEmail4" 
     placeholder="DIGITE AQUI O SEU NOME" required>
  </div>
  <div class="col-md-6">
    <label for="telefone" class="form-label">E-mail</label>
    <input type="email" class="form-control" id="inputAddress" name="telefone" 
    placeholder="DIGITE AQUI O SEU E-MAIL" required>
  </div>
  <div class="col-md-6">
    <label for="senha" class="form-label">Senha</label>
    <input type="text" class="form-control" id="inputAddress" name="senha" 
    placeholder="DIGITE AQUI A SUA SENHA" required>
  </div>
  <div class="col-md-4">
  </br>
    <label for="tipo" class="form-label">Selecionar o tipo</label>
    <select id="inputState" name="tipo" class="form-select" required>
      <option >Autor</option>
      <option>Usuario</option>
    </select>
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