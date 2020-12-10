<?php
namespace src\Controller;

use core\Controller;
use src\Model\ModelAdicionar;

class ControllerAdicionar extends Controller
{
    public function carregaPagina()
    {
        require '../src/View/pages/adicionar.php';
        $cadastrar = new ModelAdicionar();
        $cadastrar->adicionarProduto();
    }
}