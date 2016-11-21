<?php
require_once 'dao/DaoCategoria.php';
$DaoCategoria = DaoCategoria::getInstance();
$dadosCategorias = $DaoCategoria->listar();
?>
<h2>Categorias</h2>
<?php
foreach ($dadosCategorias as $rowCategoria) {
   echo "<div class='floating-box'><a href='?pg=produtos&categoria={$rowCategoria["id"]}'>{$rowCategoria["descricao"]}</a></div>";
}
?>
