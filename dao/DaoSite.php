<?php

require_once 'dao/Conexao.php';
require_once 'dao/DaoSite.php';

class DaoSite {

    public static $instance;

    public function __construct() {
//
    }

    public static function getInstance() {
        If (!isset(self::$instance)) {
            self::$instance = new DaoSite();
        }
        return self::$instance;
    }
     public function getProdutoCategoria($id) {
        $sql = "SELECT produto.codigo,"
                . " produto.descricao,"
                . " produto.nome_completo,"
                . " produto.preco_custo,"
                . " produto.imagem,"
                . " categoria.descricao as categoria"
                . " FROM produto, categoria"
                . " WHERE produto.categoria_id = categoria.id"
                . " AND categoria.id =:id "
                . " ORDER BY produto.codigo";

        $p_sql = Conexao::getInstance()->prepare($sql);
        $p_sql->bindValue(":id", $id);
        $p_sql->execute();
        return $p_sql->fetchAll(PDO::FETCH_ASSOC);
    }
    public function inserir_categoria(Categoria $categoria) {
        try {
            $sql = "INSERT INTO categoria "
                    . " (descricao)"
                    . " VALUES"
                    . " (:descricao)";
            $p_sql = Conexao::getInstance()->prepare($sql);
            $p_sql->bindValue(":descricao", $categoria->getDescricao());
            return $p_sql->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

   public function listarHome() {
        $sql = "SELECT produto.codigo,"
                . " produto.descricao,"
                . " produto.nome_completo,"
                . " produto.preco_custo,"
                . " produto.imagem,"
                . " categoria.descricao as categoria"
                . " FROM produto, categoria"
                . " WHERE produto.categoria_id = categoria.id "
                . "   AND produto.destaque = 1"
                . " ORDER BY produto.descricao";

        $p_sql = Conexao::getInstance()->prepare($sql);
        $p_sql->execute();
        return $p_sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function listar_categoria() {
        $sql = "SELECT * FROM categoria";
        $p_sql = Conexao::getInstance()->prepare($sql);
        $p_sql->execute();
        return $p_sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function listar_produto() {
        $sql = "SELECT produto.codigo,"
                . " produto.imagem,"
                . " produto.nome_completo,"
                . " produto.preco_venda,"
                . " produto.quantidade_estoque,"
                . " produto.descricao,"
                . " produto.preco_custo,"
                . " produto.destaque,"
                . " categoria.descricao as categoria"
                . " FROM produto, categoria"
                . " WHERE produto.categoria_id = categoria.id"
                . " ORDER BY produto.codigo";
        $p_sql = Conexao::getInstance()->prepare($sql);
        $p_sql->execute();
        return $p_sql->fetchAll(PDO::FETCH_ASSOC);
    }
    public function listar_pedido() {
        $sql = "SELECT * FROM pedido";
        $p_sql = Conexao::getInstance()->prepare($sql);
        $p_sql->execute();
        return $p_sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function listar_produto_pedido() {
        $sql = "SELECT * FROM produto_pedido";
        $p_sql = Conexao::getInstance()->prepare($sql);
        $p_sql->execute();
        return $p_sql->fetchAll(PDO::FETCH_ASSOC);
    }

    function cpf($cpf, $senha) {
        try {
            $sql = Conexao::getInstance()->prepare("SELECT * FROM funcionario WHERE cpf = :cpf AND senha = :senha");

            $param = array(
                ":cpf" => $cpf,
                ":senha" => ($senha)
            );


            $sql->execute($param);

            if ($sql->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $ex) {
            echo "ERRO 04: {$ex->getMessage()}";
        }
    }

    public function RetornaNome($cpf) {
        try {

            $sql = Conexao::getInstance()->prepare("SELECT * FROM funcionario WHERE cpf = :cpf");
            $param = array(
                ":cpf" => $cpf
            );

            $sql->execute($param);

            $dados = $sql->fetch(PDO::FETCH_ASSOC);

            return $dados["cpf"];
        } catch (PDOException $ex) {
            echo "ERRO 04: {$ex->getMessage()}";
            return null;
        }
    }

    public function getCliente($cpf) {
        $sql = "SELECT * FROM cliente WHERE cpf =:cpf";
        $p_sql = Conexao::getInstance()->prepare($sql);
        $p_sql->bindValue(":cpf", $cpf);
        $p_sql->execute();
        return $p_sql->fetch(PDO::FETCH_ASSOC);
    }

     public function getProduto($codigo) {
        $sql = "SELECT produto.codigo,"
                . " produto.nome_completo,"
                . " produto.descricao,"
                . " produto.preco_custo,"
                . " produto.imagem,"
                . " categoria.descricao as categoria"
                . " FROM produto, categoria"
                . " WHERE produto.categoria_id = categoria.id"
                . " AND produto.codigo =:codigo "
                . " ORDER BY produto.codigo";

        $p_sql = Conexao::getInstance()->prepare($sql);
        $p_sql->bindValue(":codigo", $codigo);
        $p_sql->execute();
        return $p_sql->fetch(PDO::FETCH_ASSOC);
    }

    public function getCategoria($id) {
        $sql = "SELECT * FROM categoria WHERE id =:id";
        $p_sql = Conexao::getInstance()->prepare($sql);
        $p_sql->bindValue(":id", $id);
        $p_sql->execute();
        return $p_sql->fetch(PDO::FETCH_ASSOC);
    }

    public function getPedido($numero) {
        $sql = "SELECT * FROM pedido WHERE numero =:numero";
        $p_sql = Conexao::getInstance()->prepare($sql);
        $p_sql->bindValue(":numero", $numero);
        $p_sql->execute();
        return $p_sql->fetch(PDO::FETCH_ASSOC);
    }


}
