<?php
namespace src\Model;

use \core\DatabaseMysql;

class ModelHome{
    public function selectAll()
    {
        $query = new DatabaseMysql();
        $query->conectar();
        $query->buscaProdutos();
        return $query->getQuery();
    }
}