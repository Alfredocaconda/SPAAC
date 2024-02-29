@extends('layout.corpo')
@extends('layout.cabecalho')
@section('title','Autores')

@section('cabecalho')
@section('content')
<section class="mb-30px">
      <div class="container">
        <div class="inputs" >
        <input type="text" style="width: 50%;" placeholder="Buscar os autores dos artigos Cientificos">
      <button  class="botao">Pesquisar</button>
      <ul class="ul">
        <li class="li">Coleções</li>
        <li class="li">Periodicos</li>
      </ul>
        </div>
      </div>
    </section>
  <!--================ Start Footer Area =================-->
@endsection





