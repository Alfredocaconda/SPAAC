<h2>Dados de cada Artigo_Cientifico {{$username->id}}</h2>
<ul>
    <li>titulo->{{$username->titulo}}</li>
    <li>resumo->{{$username->resumo}}</li>
    <li>volume->{{$username->volume}}</li>
    <li>id_categoria->{{$username->id_categoria}}</li>
    <li>id_autores->{{$username->id_autores}}</li>
    <li>id_data->{{$username->id_data}}</li>
    <li>id_palavra_chave->{{$username->id_palavra_chave}}</li>
</ul>
<form action="{{route('Artigo_Cientifico.destroy', $username->id)}}" method="post">
    @csrf()
    @method('DELETE')
    <button type="submite">DELETAR</button>
</form>