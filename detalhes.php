<?php
require_once 'dao/DaoSite.php';
$DaoSite = DaoSite::getInstance();
$dadosProdutos = $DaoSite->listar_produto();
if (isset($_GET["codigo"])) {
    $codigo = $_GET["codigo"];
    $rowProduto = $DaoSite->getProduto($codigo);
}
?>
<div class="titulo">
    <span class="label label-success">Detalhes do Produto:</span>
</div>
<div class="img_detalhes"><br>  
    <img src="http://127.0.0.1/software/fotos/<?= $rowProduto["imagem"] ?>" alt="<?= $rowProduto["nome_completo"] ?>" width="250" height="250"><h3><?= $rowProduto["descricao"] ?></h3>
</div>
<div style="text-align: center;padding: 10px auto;">
    <h3><?= $rowProduto["nome_completo"] ?></h3>
    <h4>Categoria: <?= $rowCategoria["descricao"] ?></h4>
    <h4>R$ <?= $rowProduto["preco_custo"] ?></h4>
    <center><a href="#" class="btn btn-primary btn-primary"><span class="glyphicon glyphicon-shopping-cart"></span> Comprar Agora </a></center>
</div>
<br>
<br>

