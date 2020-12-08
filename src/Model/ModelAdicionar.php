<?php
namespace src\Model;

use core\DatabaseMysql;

class ModelAdicionar {

    public function adicionarProduto()
    {
        // require '../src/View/pages/Adicionar.php';
        // Fazer coisas de banco se precisar
        // carregar arquivo da pagina desse controller
        $cadastrar = new DatabaseMysql();
        $cadastrar->conectar();
        $cadastrar->cadastrar();


    }

}