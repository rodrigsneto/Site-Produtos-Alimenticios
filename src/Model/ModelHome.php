<?php
namespace src\Model;

use core\DatabaseMysql;
use core\DatabaseHelper;

class ModelHome
{
    public function buscaTodos()
    {
        $busca = new DatabaseHelper();
        $produtosTodos = $busca->buscaProdutoTodos();
        return $produtosTodos;

    }
}
