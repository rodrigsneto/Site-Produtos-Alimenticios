<?php
namespace src\Controller;

use core\Controller;
use src\Model\ModelHome;

class ControllerHome extends Controller {
    public function __construct() {
        $conexao = new ModelHome();
        $conexao->selectAll();
    }

    public function carregaPagina()
    {
        require '../src/View/pages/home.php';
    }

}
