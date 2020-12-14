<?php
namespace src\Model;

use core\DatabaseConectar;
use core\DatabaseHelper;

class ModelAdicionar
{
    public function adicionarProduto()
    {
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        $preco = filter_input(INPUT_POST, 'preco', FILTER_VALIDATE_FLOAT);
        $precoPromo = filter_input(INPUT_POST, 'precoPromo', FILTER_VALIDATE_FLOAT);

        if($nome) {
            $buscaProduto = new DatabaseHelper();
            $produtoCadastrado = $buscaProduto->buscaProduto('nome', $nome);

            if (count($produtoCadastrado)===0)
            {
                $pdo = new DatabaseConectar();
                $sql = $pdo->conectar()->prepare("INSERT INTO produtos (nome, preco, preco_promo) VALUES (:nome, :preco, :precoPromo)");
                $sql->bindValue(':nome', $nome);
                $sql->bindValue(':preco', $preco);
                $sql->bindValue(':precoPromo', $precoPromo);
                $sql->execute();
                header("Location: ../public/index.php");
            } else {
                echo "<strong>ERRO: Produto com o mesmo nome já existente</strong>";
            }
        }
    }
}