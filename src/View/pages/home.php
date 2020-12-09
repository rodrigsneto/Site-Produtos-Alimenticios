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
        <td><strong>ID</strong></td>
        <td><strong>NOME</strong></td>
        <td><strong>DATA DE CRIAÇÃO</strong></td>
        <td><strong>DATA DE ATUALIZAÇÃO</strong></td>
        <td><strong>PREÇO</strong></td>
        <td><strong>PREÇO PROMOCIONAL</strong></td>
        <td><strong>AÇÕES</strong></td>
    </tr>

    <?php foreach($produtos as $produto): ?>
        <tr>
            <td><?php echo $produto['id'];?></td>
            <td><?php echo $produto['nome'];?></td>
            <td><?php echo $produto['data_criacao'];?></td>
            <td><?php echo $produto['data_atualizacao'];?></td>
            <td>R$ <?php echo number_format( $produto['preco'], 2, ',', '.' );?></td>
            <td>R$ <?php echo number_format( $produto['preco_promo'], 2, ',', '.' );?></td>
            <td>
                <a href="../public/editar.php?id=<?php echo $produto['id']; ?>"><button>Editar</button></a>

                <a href="../public/excluir.php?id=<?php echo $produto['id']; ?> "><button onclick="return confirm('Tem certeza que deseja excluir o produto: <?= $produto['nome']; ?>?')">Excluir</button></a>

            </td>
        </tr>
    <?php endforeach; ?>
</table>