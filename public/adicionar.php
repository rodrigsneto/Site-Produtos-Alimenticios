<?php

require "../vendor/autoload.php";

use src\Controller\ControllerAdicionar;


// Instanciar ControllerHome
// ControllerHome deve extender o Controller do core e n recebe nada como parametro
$controller = new ControllerAdicionar();

// Como o controller home extende o Controller do core ele tem acesso
// aos metodos carregaCabecalho e carregaRodape

// O médod carrega cabeçalho deve dar um require no arquivo de cabeçalho
$controller->carregaCabecalho();

// Metodo carregaPAgina deve carregar o arquivo page da home
// E nesse metodo tbm que vai fazer coisas com o banco se precisar
$controller->carregaPagina();

// O médod carregaRodape deve dar um require no arquivo de rodape
$controller->carregaRodape();
