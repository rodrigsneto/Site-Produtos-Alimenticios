<?php
namespace src\Model;

use core\DatabaseConectar;

class ModelExcluir {
    public function excluirProduto()
    {
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        if ($id) {
            $pdo = new DatabaseConectar();
            $sql = $pdo->conectar()->prepare("DELETE FROM produtos WHERE produtos.id = :id");
            $sql->bindValue(':id', $id);
            $sql->execute();
            header("Location: index.php");
        }
    }
}