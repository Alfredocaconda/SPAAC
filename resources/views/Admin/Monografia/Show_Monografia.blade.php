<h2>Dados de cada Artigo_Cientifico {{$username->id}}</h2>
<ul>
    <li>titulo->{{$username->titulo_monografia}}</li>
    <li>resumo->{{$username->instituicao_ensino}}</li>
    <li>volume->{{$username->resumo}}</li>
    <li>id_categoria->{{$username->id_categoria}}</li>
    <li>id_autores->{{$username->id_autores}}</li>
    <li>id_data->{{$username->id_data}}</li>
    <li>id_palavra_chave->{{$username->id_palavra_chave}}</li>
</ul>
<form action="{{route('Monografia.destroy', $username->id)}}" method="post">
    @csrf()
    @method('DELETE')
    <button type="submite">DELETAR</button>
</form>