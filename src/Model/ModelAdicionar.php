<?php
namespace src\Model;

use core\DatabaseMysql;

class ModelAdicionar
{
    public function adicionarProduto()
    {
        $cadastrar = new DatabaseMysql();
        $cadastrar->conectar();
        $cadastrar->cadastrar();
    }
}