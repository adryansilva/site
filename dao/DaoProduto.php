<?php

require_once 'Conexao.php';

class DaoProduto {

    public static $instance;

    private function __construct() {
        //
    }

    public static function getInstance() {
        if (!isset(self::$instance))
            self::$instance = new DaoProduto();
        return self::$instance;
    }
   
    public function listar() {
        $sql = "SELECT produto.id,"
                . " produto.descricao,"
                . " produto.preco,"
                . " produto.imagem,"
                . " categoria.descricao as categoria"
                . " FROM produto, categoria"
                . " WHERE produto.categoria_id = categoria.id "
                . " ORDER BY produto.descricao";

        $p_sql = Conexao::getInstance()->prepare($sql);
        $p_sql->execute();
        return $p_sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProduto($id) {
        $sql = "SELECT produto.id,"
                . " produto.descricao,"
                . " produto.preco,"
                . " produto.imagem,"
                . " categoria.descricao as categoria"
                . " FROM produto, categoria"
                . " WHERE produto.categoria_id = categoria.id"
                . " AND produto.id =:id "
                . " ORDER BY produto.descricao";

        $p_sql = Conexao::getInstance()->prepare($sql);
        $p_sql->bindValue(":id", $id);
        $p_sql->execute();
        return $p_sql->fetch(PDO::FETCH_ASSOC);
    }
    
    public function getProdutoCategoria($id) {
        $sql = "SELECT produto.id,"
                . " produto.descricao,"
                . " produto.preco,"
                . " produto.imagem,"
                . " categoria.descricao as categoria"
                . " FROM produto, categoria"
                . " WHERE produto.categoria_id = categoria.id"
                . " AND categoria.id =:id "
                . " ORDER BY produto.descricao";

        $p_sql = Conexao::getInstance()->prepare($sql);
        $p_sql->bindValue(":id", $id);
        $p_sql->execute();
        return $p_sql->fetchAll(PDO::FETCH_ASSOC);
    }
    

}
