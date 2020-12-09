<?php

namespace src\Model;

use core\DatabaseMysql;

class ModelEditar
{

    public function buscaProduto()
    {
        $filtro = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

        $usuarioBusca = new DatabaseMysql();

        $usuarioBusca->conectar();

        $usuarioDados = $usuarioBusca->buscaProduto('id', $filtro);

        return $usuarioDados;

    }
    public function cadastraProduto()
    {
        $usuario = new DatabaseMysql();

        $usuario->conectar();

        $usuario->editar();

    }
    public function verifExist()
    {
        $usuarioLista = $this->buscaProduto();

        if (count($usuarioLista) == 0) {
            header("Location: index.php");
        }
    }
}