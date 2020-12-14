<form method="POST" action="">
    <label>
        Nome do Produto:<br/>
        <input type="text" name="nome" required="required"><br/><br/>
    </label>
    <label>
        Data da Criação:<br/>
        <input type="datetime-local" name="dataCriacao" disabled><br/><br/>
    </label>
    <label>
        Data de Atualização:<br/>
        <input type="datetime-local" name="dataAtualizacao" disabled><br/><br/>
    </label>
    <label>
        Preço:<br/>
        <input type="number" min="0" max="100" step="any" name="preco" required="required"><br/><br/>
    </label>
    <label>
        Preço com Promoção:<br/>
        <input type="number" min="0" max="100" step="any" name="precoPromo"><br/><br/>
    </label>
    <input type="submit" value="Cadastrar">&nbsp;&nbsp;
    <button><a href="../public/index.php" target="_self" style="text-decoration:none; visited:none;">Cancelar</a></button>
</form>