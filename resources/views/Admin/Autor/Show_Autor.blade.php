<h2>Dados de cada usuario {{$username->id}}</h2>
<ul>
    <li>Nome->{{$username->instituicao_vinculado}}</li>
    <li>nacionalidade->{{$username->nacionalidade}}</li>
    <li>grau academico->{{$username->grau_academico}}</li>
    <li>usuario->{{$username->usuario_id}}</li>
</ul>
<form action="{{route('autor.destroy', $username->id)}}" method="post">
    @csrf()
    @method('DELETE')
    <button type="submite">DELETAR</button>
</form>