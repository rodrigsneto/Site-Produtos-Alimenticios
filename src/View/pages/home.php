<?php
use src\Model\ModelHome;

$todosprodutos = new ModelHome;
$produtos = $todosprodutos->selectAll();
?>
Adicionar novo item: <a href="../public/adicionar.php"><button>Adicionar</button></a>
<br/>
<br/>
<table border="1" width="100%">
    <tr>
        <td>ID</td>
        <td>NOME</td>
        <td>DATA CRIACAO</td>
        <td>DATA ATUALIZACAO</td>
        <td>PRECO</td>
        <td>PRECO PROMO</td>
        <td>AÇÕES</td>

    </tr>
    <?php foreach($produtos as $produto): ?>
        <tr>
            <td><?php echo $produto['id'];?></td>
            <td><?php echo $produto['nome'];?></td>
            <td><?php echo $produto['data_criacao'];?></td>
            <td><?php echo $produto['data_atualizacao'];?></td>
            <td><?php echo $produto['preco'];?></td>
            <td><?php echo $produto['preco_promo'];?></td>
            <td>
                <a href="../public/editar.php?id=<?php echo $produto['id']; ?>">EDITAR</a>
                <a href="../public/excluir.php?id=<?php echo $produto['id']; ?>">EXCLUIR</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>