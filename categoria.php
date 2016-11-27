<?php
require_once 'dao/DaoSite.php';
$DaoSite = DaoSite::getInstance();
$dadosCategorias = $DaoSite->listar_categoria();
$dadosProdutos = $DaoSite->listar_produto();
?>
<h2>Categorias</h2>
<?php
foreach ($dadosCategorias as $rowCategoria) {
   echo "<div class='floating-box'><a href='?pg=produtos&categoria={$rowCategoria["id"]}'>{$rowCategoria["descricao"]}</a></div>";
}
?>
