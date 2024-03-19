<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')-SPAAC</title>
    @yield('links')
</head>
<body>

    @yield('nav')
    <!--=========INICIO DO CABECALHO DA NOSSA PAGINA===========---------->
    <head>

    @yield('navegacao')
    </head>
 <!--=========FIM DO CABECALHO DA NOSSA PAGINA===========---------->

  <!--=========INICIO DO CONTEUDO DA NOSSA PAGINA===========---------->
    <div class="conteudo">
        @yield('conteudo')
    </div>
<!--=========INICIO DO CONTEUDO DA NOSSA PAGINA===========---------->

<!--=========INICIO DO RODAPÉ DA NOSSA PAGINA===========---------->
<footer>
@yield('rodape')
</footer>
<!--=========FIM DO RODAPÉ DA NOSSA PAGINA===========---------->
@yield('script')
</body>
</html>