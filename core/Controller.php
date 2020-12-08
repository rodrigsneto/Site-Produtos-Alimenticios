<?php
namespace core;

abstract class Controller implements ControllerInterface
{
    public function carregaCabecalho()
    {
        require '../src/View/partial/cabecario.php';
    }

    public function carregaRodape()
    {
        require '../src/View/partial/rodape.php';
    }
}