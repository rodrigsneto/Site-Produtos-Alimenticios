<?php

namespace core;

interface ControllerInterface
{
    public function carregaCabecalho();

    public function carregaPagina();

    public function carregaRodape();
}