<?php
namespace src\Controller;

use core\Controller;
use src\Model\ModelHome;

class ControllerHome extends Controller
{
    public function carregaPagina()
    {
        $todosprodutos = new ModelHome;
        $produtos = $todosprodutos->buscaTodos();
        require '../src/View/pages/home.php';
    }
}