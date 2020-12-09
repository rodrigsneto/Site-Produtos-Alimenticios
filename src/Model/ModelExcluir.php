<?php
namespace src\Model;

use core\DatabaseMysql;

class ModelExcluir {

    public function excluirProduto()
    {
        $cadastrar = new DatabaseMysql();
        $cadastrar->conectar();
        $cadastrar->excluirProdutoId();
    }

}