<h2>Dados de cada usuario {{$username->id}}</h2>
<ul>
    <li>Nome->{{$username->nome}}</li>
    <li>Email->{{$username->email}}</li>
    <li>Senha->{{$username->senha}}</li>
    <li>Tipo->{{$username->tipo}}</li>
</ul>
<form action="{{route('usuario.destroy', $username->id)}}" method="post">
    @csrf()
    @method('DELETE')
    <button type="submite">DELETAR</button>
</form>