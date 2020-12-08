<?php
namespace src\Controller;

use core\Controller;
use src\Model\ModelAdicionar;

class ControllerAdicionar extends Controller {

    public function carregaPagina()
    {
        require '../src/View/pages/Adicionar.php';
        // Fazer coisas de banco se precisar
        // carregar arquivo da pagina desse controller
        $cadastrar = new ModelAdicionar();
        $cadastrar->adicionarProduto();
        // $cadastrar->conectar();
        // $cadastrar->cadastrar();


    }

}
