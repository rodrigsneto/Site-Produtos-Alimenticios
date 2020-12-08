<?php
namespace src\Controller;

use core\Controller;
use core\DatabaseMysql;

class ControllerAdicionar extends Controller {

    public function carregaPagina()
    {
        require '../src/View/pages/Adicionar.php';
        // Fazer coisas de banco se precisar
        // carregar arquivo da pagina desse controller
        $cadastrar = new DatabaseMysql();
        $cadastrar->cadastrar();


    }

}
