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
<a href="{{route ('autor.create')}}" class="btn btn-primary">Novo Usuario</a>
<!--CODIGO DA TABELA PARA LISTAR TODOS OS USUARIOS CADASTRADO NO SISTEMA-->
<table>
    <thead>
        <th>Codigo</th>
        <th>Nome da Instituição</th>
        <th>Grau Academico</th>
        <th>Usuario</th>
    </thead>
    <tbody>
        <!--CONDICAO QUE IRA PERCORRER PARA LISTAR TODOS OS FUNCIONARIOS NA TABELA-->
        <!---E POR SUA VEZ O CHAMAMOS O USUARIO E MUDAMOS DE SER COMO UMA VARIAVEL--->
    @foreach($valor as $user)
    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->instituicao_vinculado}}</td>
        <td>{{$user->grau_academico}}</td>
        <td>{{$user->usuario_id}}</td>        
        <td>
           <a href="{{route('autor.show',$user->id)}}" class="btn btn-success">IR</a>
           <a href="{{route('autor.edit',$user->id)}}" class="btn btn-success">editar</a>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
