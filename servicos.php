<?php
require_once 'dao/DaoSite.php';
$DaoSite = DaoSite::getInstance();
$listar_servico = $DaoSite->listar_servico();
if (isset($_GET["servico"])) {
    $servico = @$_GET["servico"];
    $dadosservicos = $DaoSite->getservico($servico);
} else {
    $dadosservicos = $DaoSite->listar_servico();
}
?>
<div class="titulo">
    <span class="label label-info">Confira Nossos Serviços!</span>
</div><br>
<div class="promocao">
    <?php
    foreach ($dadosservicos as $rowServico) {
        ?>
        <div class="img_servico">
            <a href="?pg=contato"<?= $rowServico["id"] ?> style="text-decoration:none;">
                <img src="http://127.0.0.1/gestao_itsolution/fotos/<?= $rowServico["imagem"] ?>" alt="<?= $rowServico["tipo"] ?>" width="280" height="200">

                <div class="titulo_produto"><b>Tipo de Serviço:</b> <?= $rowServico["tipo"] ?></div>
                <div class="desc"><b>Tipos de Problemas:</b> <?= $rowServico["problema"] ?></div>
                <div class="desc"><b>R$</b> <?= $rowServico["custo"] ?></div>
                <div class="desc"><b>Descrição:</b> <?= $rowServico["relatorio"] ?></div>
            </a>
            <center><a href="?pg=contato" class="btn btn-primary btn-primary"><span class="glyphicon glyphicon-shopping-cart"></span> Entrar em Contato</a></center>
        </div>

        <?php
    }
    
    ?>
</div>