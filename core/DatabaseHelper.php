<?php
namespace core;

use core\DatabaseConectar;

class DatabaseHelper
{
    public function buscaProduto($filtro = null, $valor = null)
    {
        $lista = [];
        $pdo = new DatabaseConectar();
        $sql = $pdo->conectar()->prepare("SELECT * FROM produtos WHERE ".$filtro." = :valor");
        $sql->bindValue(':valor', $valor);
        $sql->execute();

        if($sql->rowCount() != 0)
        {
            $lista = $sql->fetch(\PDO::FETCH_ASSOC);
        }
        return $lista;

    }

    public function buscaProdutoTodos($adicional = "ORDER BY `produtos`.`id` ASC")
    {
        $lista = [];

        $pdo = new DatabaseConectar();
        $sql = $pdo->conectar()->query("SELECT * FROM produtos ".$adicional);
        if ($sql->rowCount() > 0)
        {
            $lista = $sql->fetchAll(\PDO::FETCH_ASSOC);
        }
        return $lista;

    }

}