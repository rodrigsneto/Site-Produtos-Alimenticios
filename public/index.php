<?php
require "../vendor/autoload.php";

use src\Controller\ControllerHome;

$controller = new ControllerHome();

$controller->carregaCabecalho();

$controller->carregaPagina();

$controller->carregaRodape();
