<form method="POST" action="">
    <label>
        Nome do Produto:<br/>
        <input type="text" name="nome" required="required"><br/><br/>
    </label>
    <label>
        Data da Criação:<br/>
        <input type="datetime-local" name="data_criacao" disabled><br/><br/>
    </label>
    <label>
        Data de Atualização:<br/>
        <input type="datetime-local" name="data_atualizacao" disabled><br/><br/>
    </label>
    <label>
        Preço:<br/>
        <input type="number" min="0" max="10000" step="any" name="preco" required="required"><br/><br/>
    </label>
    <label>
        Preço com Promoção:<br/>
        <input type="number" min="0" max="10000" step="any" name="preco_promo"><br/><br/>
    </label>
        <input type="submit" value="Cadastrar">
</form>
<?php var_dump($_POST); ?>