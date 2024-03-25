<!--extendendo o index da pagina principal do administradr-->
@extends('Admin.layout.app')
<!--- Alterando o titulo da pagina-->
@section('titulo','Admin')
<!-- CODIGO DOS LINKS DO CSS E BOOTSTREP-->
@section('links')
@include('Admin.layout.links.links')
@endsection
<!-- FIM DO CODIGO DO LINK-->

<p>listar os dados</p>
<!-- LINK COM A URL PARA DIRECIONAR A PAGINA DE CADASTRO DO USUARIO-->
<a href="{{route ('Artigo_Cientifico.create')}}" class="btn btn-primary">Novo Usuario</a>
<!--CODIGO DA TABELA PARA LISTAR TODOS OS USUARIOS CADASTRADO NO SISTEMA-->
<table>
    <thead>
        <th>codigo</th>
        <th>titulo</th>
        <th>resumo</th>
        <th>volume</th>
        <th>id_categoria</th>
        <th>id_autores</th>
        <th>id_data</th>
        <th>id_palavra_chave</th>
    </thead>
    <tbody>
        <!--CONDICAO QUE IRA PERCORRER PARA LISTAR TODOS OS FUNCIONARIOS NA TABELA-->
        <!---E POR SUA VEZ O CHAMAMOS O USUARIO E MUDAMOS DE SER COMO UMA VARIAVEL--->
    @foreach($valor as $user)
    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->titulo}}</td>
        <td>{{$user->resumo}}</td>
        <td>{{$user->volume}}</td>     
        <td>{{$user->id_categoria}}</td>     
        <td>{{$user->volid_autoresume}}</td>     
        <td>{{$user->id_data}}</td>     
        <td>{{$user->id_palavra_chave}}</td>      
        <td>
           <a href="{{route('Artigo_Cientifico.show',$user->id)}}" class="btn btn-success">IR</a>
           <a href="{{route('Artigo_Cientifico.edit',$user->id)}}" class="btn btn-success">editar</a>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
