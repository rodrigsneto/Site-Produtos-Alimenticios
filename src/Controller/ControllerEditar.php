<?php
namespace src\Controller;

use core\Controller;
use src\Model\ModelEditar;

class ControllerEditar extends Controller
{
    public function carregaPagina()
    {
        $usuariolista = new ModelEditar();
        $usuarioDados = $usuariolista->buscaProduto();
        $usuariolista->verifExist();
        require '../src/View/pages/editar.php';
        $usuariolista->cadastraProduto();
    }
}