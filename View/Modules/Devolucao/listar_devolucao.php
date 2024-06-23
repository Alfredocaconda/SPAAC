<?php
require_once "./View/Cabecalho/header.php";
?>
      <!-- dashboard inner -->
      <div class="container-fluid">
         <div class="row column_title">
            <div class="col-md-12">
               <div class="page_title">
                  <h2>Listar fatura</h2>
               </div>
            </div>
         </div>
      </div>
      <nav class="navbar bg-body-tertiary">
         <div class="container-fluid">
            <form class="d-flex" action="/devolucao" method="POST" role="search">
               <input class="form-control me-2" type="search" name="fatura" placeholder="Nº DA FATURA" aria-label="Search" autofocus>
               <button class="btn btn-outline-success" type="submit">Pesquisar</button>
            </form>
         </div>
      </nav>
      <section class="content" style="overflow-y: auto; overflow-x: hidden; height: 65vh;">
      <table class="table table-hover">
        <tr>
            <th  scope="col">NOME/DESCRIÇÃO/CATEGORIA</th>
            <th  scope="col">QTD VENDIDO</th>
            <th  scope="col">VALOR TOTAL</th>
            <th  scope="col">DATA</th>
            <th  scope="col">FACTURA</th>
            <th  scope="col">FUNCIONÁRIO</th>
        </tr>
        <?php foreach ($model->linhas as $item): ?>
         <tr>
            <td scope="col" ><?=$item->nome."/".$item->descricao."/".$item->nomec?> </td>
            <td scope="col" ><?=$item->qtdrequerida?> </td>
            <td scope="col" ><?=number_format($item->totalCompra)."KZ"?> </td>
            <td scope="col" ><?=$item->datavenda?> </td>
            <td scope="col" ><?=$item->fatura?> </td>
            <td scope="col" ><?=$item->nomef?> </td>
            <td scope="col" ><a href="/apagarDevolucao?idp=<?=$item->idp?>" class="btn btn-danger">Apagar</a></td>
        </tr>
               <?php endforeach ?>
            </tbody>
         </table>
      </section>
   <!-- footer -->
<?php
require_once "./View/Cabecalho/rodape.php";
?>