<form method="POST" action="">
    <label>
        <input type="hidden" name="id" value="<?=$usuarioDados['id'];?>">
    </label>
    <label>
        Nome do Produto:<br/>
        <input type="text" name="nome" required="required"
               value="<?=$usuarioDados['nome'];?>">
    </label>
    <label>
        Preço:<br/>
        <input type="number" min="0" max="100" step="any" name="preco" required="required"
               value="<?=$usuarioDados['preco'];?>">

    </label>
    <label>
        Preço com Promoção:<br/>
        <input type="number" min="0" max="100" step="any" name="preco_promo"
               value="<?=$usuarioDados['preco_promo'];?>">

    </label>

    <input class="buttonformadc" type="submit" value="Editar">&nbsp;&nbsp;
    <a href="../public/index.php" ><button class="buttonformadc">Cancelar</button></a>
</form>
