<?php
require "../vendor/autoload.php";

use src\Controller\ControllerEditar;

$controller = new ControllerEditar();

$controller->carregaCabecalho();

$controller->carregaPagina();

$controller->carregaRodape();