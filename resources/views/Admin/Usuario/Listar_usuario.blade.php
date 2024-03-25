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
<a href="{{route ('usuario.create')}}" class="btn btn-primary">Novo Usuario</a>
<!--CODIGO DA TABELA PARA LISTAR TODOS OS USUARIOS CADASTRADO NO SISTEMA-->
<table>
    <thead>
        <th>Codigo</th>
        <th>Nome Completo</th>
        <th>E-mail</th>
        <th>Senha</th>
        <th>Tipo</th>
    </thead>
    <tbody>
        <!--CONDICAO QUE IRA PERCORRER PARA LISTAR TODOS OS FUNCIONARIOS NA TABELA-->
        <!---E POR SUA VEZ O CHAMAMOS O USUARIO E MUDAMOS DE SER COMO UMA VARIAVEL--->
    @foreach($valor as $user)
    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->nome}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->senha}}</td>
        <td>{{$user->tipo}}</td>
        <td>
           <a href="{{route('usuario.show',$user->id)}}" class="btn btn-success">IR</a>
           <a href="{{route('usuario.edit',$user->id)}}" class="btn btn-success">editar</a>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
