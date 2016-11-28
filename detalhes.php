<?php
require_once 'dao/DaoSite.php';
$DaoSite = DaoSite::getInstance();
$listaCategorias = $DaoSite->listar_categoria();
$dadosProdutos = $DaoSite->listar_produto();
if (isset($_GET["codigo"])) {
    $codigo = @$_GET["codigo"];
    $rowProduto = $DaoSite->getProduto($codigo);
}
?>
<div class="titulo">
    <span class="label label-success">Detalhes do Produto:</span>
</div>
<div class="img_detalhes"><br>
    <img src="http://127.0.0.1/gestao_itsolution/fotos/<?= $rowProduto["imagem"] ?>" alt="<?= $rowProduto["nome_completo"] ?>" width="250" height="250"><h3><?= $rowProduto["descricao"] ?></h3><br>
</div>
<br>
<div class="panel panel-primary" style="width: 40%; float: none; margin-left: 345px;"> <br><center><div class="titulo">Categoria: <?= $rowProduto["categoria"] ?> <br><?= $rowProduto["nome_completo"] ?></div></center><div class="titulo">Vendido e entregue por g-fire
        <h3>r$ <?= $rowProduto["preco_custo"] ?></h3>
        10x  s/ juros
            </div>
    <center><a href="#" class="btn btn-primary btn-primary"><span class="glyphicon glyphicon-shopping-cart"></span> Comprar Agora </a>
    </center>
    <br>
</div>
<br>
<br>

