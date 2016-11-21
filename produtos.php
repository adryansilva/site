<?php
require_once 'dao/DaoProduto.php';
$DaoProduto = DaoProduto::getInstance();
if (isset($_GET["categoria"])) {
    $categoria = $_GET["categoria"];
    $dadosProdutos = $DaoProduto->getProdutoCategoria($categoria);
} else {
    $dadosProdutos = $DaoProduto->listar();
}
?>
<h2>Produtos</h2>
<?php
foreach ($dadosProdutos as $rowProduto) {
    ?>
    <div class="img">
        <a href="?pg=detalhes&id=<?=$rowProduto["id"]?>">
            <img src="http://127.0.0.1/crud/fotos/<?=$rowProduto["imagem"]?>" alt="<?=$rowProduto["descricao"]?>" width="300" height="200">
        </a>
        <div class="desc"><?=$rowProduto["descricao"]?></div>
        <div class="desc"><?=$rowProduto["categoria"]?></div>
        <div class="desc">R$ <?=$rowProduto["preco"]?></div>
    </div>

    <?php
}
?>