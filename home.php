
<head>
    <meta charset="UTF-8">
    <title>ITSolution - A tecnologia a seu dispor</title>
    <link rel="stylesheet" href="css/estilo.css" type="text/css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<?php
require_once 'dao/DaoSite.php';
$DaoSite = DaoSite::getInstance();
$dadosProdutos = $DaoSite->listarHome();
?>
<div class="titulo">
    <span class="label label-info">Confira as Promoções especiais para você!</span>
</div>
<br>
<div class="promocao">
    <?php
    foreach ($dadosProdutos as $rowProduto) {
        ?>
        <div class="img">
            <a href="?pg=detalhes&codigo=<?= $rowProduto["codigo"] ?>" style="text-decoration:none">
                <img src="http://127.0.0.1/gestao_itsolution/fotos/<?= $rowProduto["imagem"] ?>" alt="<?= $rowProduto["nome_completo"] ?>" width="300" height="200">

                <div class="titulo_produto"><?= $rowProduto["nome_completo"] ?></div>
                <div class="desc" style="width: 250px; height: 240px; overflow: auto;"><?= $rowProduto["descricao"] ?></div>
                <div class="desc"><?= $rowProduto["categoria"] ?></div>
                <div class="desc">R$ <?= $rowProduto["preco_custo"] ?></div>
            </a>
            <center><a href="#" class="btn btn-primary btn-primary"><span class="glyphicon glyphicon-shopping-cart"></span> Comprar</a></center>
        </div>

        <?php
    }
    ?>
</div>

