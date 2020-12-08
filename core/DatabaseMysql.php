<?php
namespace core;

class DatabaseMysql implements DatabaseInterface{
    public $dbnome = 'projetomvc';
    public $dbhost = 'localhost';
    public $dbuser = 'root';
    public $dbpass = '';
    public $query;

    public function getDbnome() {
        return $this->dbnome;
    }
    public function setDbnome($dbnome) {
        $this->dbnome = $dbnome;
    }
    public function getDbhost() {
        return $this->dbhost;
    }
    public function setDbhost($dbhost) {
        $this->dbhost = $dbhost;
    }
    public function getDbuser() {
        return $this->dbuser;
    }
    public function setDbuser($dbuser) {
        $this->dbuser = $dbuser;
    }
    public function getDbpass() {
        return $this->dbpass;
    }
    public function setDbpass($dbpass) {
        $this->dbpass = $dbpass;
    }
    public function getQuery() {
        return $this->query;
    }
    public function setQuery($index) {
        $this->query = $index;
    }

    public function conectar() {
        $this->setQuery(new \PDO("mysql:dbname=".$this->getDbnome().";host=".$this->getDbhost(), $this->getDbuser(), $this->getDbpass()));

    }
    public function buscaProdutos($adicional = "ORDER BY `produtos`.`id` ASC") {
        $select = $this->getQuery();
        $lista = [];
        $sql = $select->query("SELECT * FROM produtos ".$adicional);
        if ($sql->rowCount() > 0){
            $lista = $sql->fetchAll(\PDO::FETCH_ASSOC);
        }

        return $lista;

    }
    public function buscaProduto($filtro = null, $valor = null) {
        $lista = [];
        $pdo = $this->getQuery();
        $sql = $pdo->prepare("SELECT * FROM produtos WHERE ".$filtro." = :valor");
        $sql->bindValue(':valor', $valor);
        $sql->execute();
        if($sql->rowCount() != 0) {
            $lista = $sql->fetchAll();
        }
        return $lista;
    }
    public function cadastrar() {
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        $preco = filter_input(INPUT_POST, 'preco', FILTER_VALIDATE_FLOAT);
        $preco_promo = filter_input(INPUT_POST, 'preco_promo', FILTER_VALIDATE_FLOAT);

        $teste = $this->buscaProduto('nome', $nome);

        if($nome) {
            if (count($teste)===0) {
                $pdo = $this->getQuery();
                $sql = $pdo->prepare("INSERT INTO produtos (nome, preco, preco_promo) VALUES (:nome, :preco, :preco_promo) ");
                $sql->bindValue(':nome', $nome);
                $sql->bindValue(':preco', $preco);
                $sql->bindValue(':preco_promo', $preco_promo);
                $sql->execute();
                echo "JA ENTROU NO IF COUNT TESTE";
                header("Location: index.php");

            } else {
                echo "<strong>ERRO: Produto já existente</strong>";
            }
        }
    }

}