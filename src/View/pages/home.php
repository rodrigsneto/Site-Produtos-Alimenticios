<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Criado em</th>
            <th>Modificado em</th>
            <th>Valor</th>
            <th>Valor Promocional</th>
            <th>Ações</th>
        </tr>
    </thead>

    <tbody>
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

                    <a href="../public/excluir.php?id=<?php echo $produto['id']; ?> ">
                        <button onclick="return confirm('Tem certeza que deseja excluir o produto: <?= $produto['nome']; ?>?')">
                            Excluir</button></a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>

</table>

<br/><br/>
Ou clique aqui para adicionar um novo item:&nbsp;&nbsp;
<a href="../public/adicionar.php">
    <button>Adicionar</button>
</a>