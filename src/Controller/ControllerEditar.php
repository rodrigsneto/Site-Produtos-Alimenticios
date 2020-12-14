<?php
namespace src\Controller;

use core\Controller;
use src\Model\ModelEditar;

class ControllerEditar extends Controller
{
    public function carregaPagina()
    {
        $usuariolista = new ModelEditar();
        $usuarioDados = $usuariolista->buscaProdutoGetId();
        $usuariolista->seExisteProduto();
        require '../src/View/pages/editar.php';
        $usuariolista->editaProduto();
    }
}