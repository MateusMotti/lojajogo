<?= $this->element('nomeDoProduto'); ?>
<?= $this->element('quantidadeDoProduto'); ?>
<?= $this->element('valorUnidade'); ?>
<?= $this->element('marcaDoProduto'); ?>

    <h1>Cadastro de Produtos</h1>

    <form method="post">
        <input type="text" name="nomeDoProduto" />
        <input type="number" name="quantidadeDoProduto" />
        <input type="number" name="valorUnidade" />
        <input type="text" name="marcaDoProduto" />

        <input type="submit" name="enviar" />
    </form>
