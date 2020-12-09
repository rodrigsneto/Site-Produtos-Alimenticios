<?php
namespace src\Controller;

use core\Controller;
use src\Model\ModelAdicionar;
use src\Model\ModelExcluir;

class ControllerExcluir extends Controller {

    public function carregaPagina()
    {
        $cadastrar = new ModelExcluir();
        $cadastrar->excluirProduto();
    }

}