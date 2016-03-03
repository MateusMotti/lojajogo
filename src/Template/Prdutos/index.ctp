
    <h1>Produtos</h1>
    <table>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Quantidade</th>
            <th>Valor</th>
            <th>Descricao</th>
        </tr>

        <?php foreach ($produtos as $produto): ?>
        <tr>
            <td><?= $produto->id ?></td>
            <td>
              <?= $this->Html->link($produtos->nome, ['action' => 'view', $produtos->id]) ?>
            </td>
            <td>
              <?= $this->Html->link($produtos->quantidade, ['action' => 'view', $produtos->id]) ?>
            </td>
            <td>
              <?= $this->Html->link($produtos->valor, ['action' => 'view', $produtos->id]) ?>
            </td>
            <td>
              <?= $this->Html->link($produtos->descricao, ['action' => 'view', $produtos->id]) ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
