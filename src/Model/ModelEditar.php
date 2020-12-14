<?php
namespace src\Model;

use core\DatabaseConectar;
use core\DatabaseHelper;

class ModelEditar
{
    public function buscaProdutoGetId()
    {
        $filtro = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        $buscaUsuario = new DatabaseHelper();
        $usuarioDados = $buscaUsuario->buscaProduto('id', $filtro);

        return $usuarioDados;

    }
    public function seExisteProduto()
    {
        $usuarioLista = $this->buscaProdutoGetId();
        if (count($usuarioLista) == 0) {
            header("Location: index.php");
        }

    }
    public function editaProduto()
    {
        $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        $preco = filter_input(INPUT_POST, 'preco', FILTER_VALIDATE_FLOAT);
        $preco_promo = filter_input(INPUT_POST, 'preco_promo', FILTER_VALIDATE_FLOAT);

        if($nome && $id && $preco)
        {
            $pdo = new DatabaseConectar();
            $sql = $pdo->conectar()->prepare("UPDATE produtos SET nome = :nome, preco = :preco, preco_promo = :preco_promo WHERE id = :id");
            $sql->bindValue(':nome', $nome);
            $sql->bindValue(':preco', $preco);
            $sql->bindValue(':preco_promo', $preco_promo);
            $sql->bindValue(':id', $id);
            $sql->execute();
            header("Location: index.php");
        }
    }
}