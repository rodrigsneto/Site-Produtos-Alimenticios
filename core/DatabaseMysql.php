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
    public function buscaProdutos($chave = null) {
        $select = $this->getQuery();
        $lista = [];
        $sql = $select->query("SELECT * FROM produtos");
        if ($sql->rowCount() > 0){
            $lista = $sql->fetchAll(\PDO::FETCH_ASSOC);
        }
        $this->setQuery($lista);

        return $this->query;

    }
    public function cadastrar() {
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        $nome = filter_input(INPUT_POST, 'preco', FILTER_VALIDATE_FLOAT);
        $nome = filter_input(INPUT_POST, 'preco_promo', FILTER_VALIDATE_FLOAT);
        echo 'Teste Funcao Cadastrar';
    }

}