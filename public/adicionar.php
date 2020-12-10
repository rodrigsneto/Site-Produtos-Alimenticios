<?php
require "../vendor/autoload.php";

use src\Controller\ControllerAdicionar;

$controller = new ControllerAdicionar();

$controller->carregaCabecalho();

$controller->carregaPagina();

$controller->carregaRodape();
