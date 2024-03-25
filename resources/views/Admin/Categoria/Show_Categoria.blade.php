<h2>Dados de cada usuario {{$username->id}}</h2>
<ul>
    <li>Nome->{{$username->nome_categoria}}</li>
    <li>Email->{{$username->tipo_categoria}}</li>
</ul>
<form action="{{route('categoria.destroy', $username->id)}}" method="post">
    @csrf()
    @method('DELETE')
    <button type="submite">DELETAR</button>
</form>