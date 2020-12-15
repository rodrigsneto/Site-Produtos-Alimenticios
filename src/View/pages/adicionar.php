<form method="POST" action="">
    <label>
        Nome do Produto:<br/>
        <input type="text" name="nome" required="required">
    </label>
    <label>
        Preço:<br/>
        <input type="number" min="0" max="100" step="any" name="preco" required="required">
    </label>
    <label>
        Preço com Promoção:<br/>
        <input type="number" min="0" max="100" step="any" name="precoPromo">
    </label>
    <input class="buttonformadc" type="submit" value="Cadastrar">&nbsp;&nbsp;
    <button class="buttonformadc"><a class="linknoformat" href="../public/index.php" target="_self">Cancelar</a></button>
</form>