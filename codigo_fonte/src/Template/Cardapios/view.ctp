<nav class="col-lg-2 col-md-3">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href=""><?= __('Actions') ?></a></li>
        <li><?= $this->Html->link(__('Edit {0}', ['Cardapio']), ['action' => 'edit', $cardapio->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete {0}', ['Cardapio']), ['action' => 'delete', $cardapio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cardapio->id)]) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Cardapios']), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['Cardapio']), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Pedidos']), ['controller' => 'Pedidos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['Pedido']), ['controller' => 'Pedidos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cardapios view col-lg-10 col-md-9">
    <h3><?= h($cardapio->id) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Codigo</th>
            <td><?= h($cardapio->codigo) ?></td>
        </tr>
        <tr>
            <th>Descricao</th>
            <td><?= h($cardapio->descricao) ?></td>
        </tr>
        <tr>
            <th>Status</th>
            <td><?= h($cardapio->status) ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($cardapio->id) ?></td>
        </tr>
        <tr>
            <th>'Preco</th>
            <td><?= $this->Number->format($cardapio->preco) ?></td>
        </tr>
        <tr>
            <th>Created</th>
            <td><?= h($cardapio->created) ?></tr>
        </tr>
        <tr>
            <th>Modified</th>
            <td><?= h($cardapio->modified) ?></tr>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related {0}', ['Pedidos']) ?></h4>
        <?php if (!empty($cardapio->pedidos)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Mesa Id</th>
                <th>Datahora</th>
                <th>Valortotal</th>
                <th>Entrega</th>
                <th>Status</th>
                <th>Created</th>
                <th>Modified</th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($cardapio->pedidos as $pedidos): ?>
            <tr>
                <td><?= h($pedidos->id) ?></td>
                <td><?= h($pedidos->mesa_id) ?></td>
                <td><?= h($pedidos->datahora) ?></td>
                <td><?= h($pedidos->valortotal) ?></td>
                <td><?= h($pedidos->entrega) ?></td>
                <td><?= h($pedidos->status) ?></td>
                <td><?= h($pedidos->created) ?></td>
                <td><?= h($pedidos->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Pedidos', 'action' => 'view', $pedidos->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Pedidos', 'action' => 'edit', $pedidos->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Pedidos', 'action' => 'delete', $pedidos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pedidos->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
