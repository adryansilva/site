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
         $descricao = $rowProduto['descricao'];
        ?>
        <div class="img">
            <a href="?pg=detalhes&codigo=<?= $rowProduto["codigo"] ?> " style="text-decoration:none">
                <img src="http://127.0.0.1/gestao_itsolution/fotos/<?= $rowProduto["imagem"] ?>" alt="<?= $rowProduto["nome_completo"] ?>" width="300" height="200">

                <div class="titulo_produto"><?= $rowProduto["nome_completo"] ?></div>
               <?php
                echo '<div class="desc">';
                 echo nl2br(
      substr($descricao, 0, 120));              
                 echo "<b> ... </b> </div>";  
                 ?>
                <div class="desc"><?= $rowProduto["categoria"] ?></div>
                <div class="desc">R$ <?= $rowProduto["preco_custo"] ?></div>
            </a>
            <center><a href="#" class="btn btn-primary btn-primary"><span class="glyphicon glyphicon-shopping-cart"></span> Comprar</a></center>
        </div>

        <?php
    }
    
    ?>
</div>