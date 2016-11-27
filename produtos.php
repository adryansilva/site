<?php
require_once 'dao/DaoSite.php';
$DaoSite = DaoSite::getInstance();
$listaCategorias = $DaoSite->listar_categoria();
if (isset($_GET["categoria"])) {
    $categoria = @$_GET["categoria"];
    $dadosProdutos = $DaoSite->getProdutoCategoria($categoria);
} else {
    $dadosProdutos = $DaoSite->listar_produto();
}
?>
<div class="titulo">
    <span class="label label-info">Confira Nossos Produtos!</span>
</div>
<div class="promocao">
    <?php
    foreach ($dadosProdutos as $rowProduto) {
        ?>
        <div class="img">
            <a href="?pg=detalhes&codigo=<?= $rowProduto["codigo"] ?> " style="text-decoration:none">
                <img src="http://127.0.0.1/software/fotos/<?= $rowProduto["imagem"] ?>" alt="<?= $rowProduto["nome_completo"] ?>" width="300" height="200">

                <div class="titulo_produto"><?= $rowProduto["nome_completo"] ?></div>
                <div class="desc"><?= $rowProduto["descricao"] ?></div>
                <div class="desc"><?= $rowCategoria["descricao"] ?></div>
                <div class="desc">R$ <?= $rowProduto["preco_custo"] ?></div>
            </a>
            <center><a href="#" class="btn btn-primary btn-primary"><span class="glyphicon glyphicon-shopping-cart"></span> Comprar</a></center>
        </div>

        <?php
    }
    
    ?>
</div>