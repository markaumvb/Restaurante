<div class="row">
<nav class="col-md-2" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Actions') ?></a></li>
        <li><?= $this->Html->link(__('New {0}', ['Cardapios Pedido']), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Pedidos']), ['controller' => 'Pedidos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Pedido']), ['controller' => 'Pedidos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Cardapios']), ['controller' => 'Cardapios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Cardapio']), ['controller' => 'Cardapios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cardapiosPedidos index col-md-10 columns content">
    <h3>Cardapios Pedidos</h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('pedido_id') ?></th>
                <th><?= $this->Paginator->sort('cardapio_id') ?></th>
                <th><?= $this->Paginator->sort('obs') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cardapiosPedidos as $cardapiosPedido): ?>
            <tr>
                <td><?= $this->Number->format($cardapiosPedido->id) ?></td>
                <td><?= $cardapiosPedido->has('pedido') ? $this->Html->link($cardapiosPedido->pedido->id, ['controller' => 'Pedidos', 'action' => 'view', $cardapiosPedido->pedido->id]) : '' ?></td>
                <td><?= $cardapiosPedido->has('cardapio') ? $this->Html->link($cardapiosPedido->cardapio->id, ['controller' => 'Cardapios', 'action' => 'view', $cardapiosPedido->cardapio->id]) : '' ?></td>
                <td><?= h($cardapiosPedido->obs) ?></td>
                <td><?= h($cardapiosPedido->created) ?></td>
                <td><?= h($cardapiosPedido->modified) ?></td>
                <td class="actions" style="white-space:nowrap">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cardapiosPedido->id], ['class'=>'btn btn-default btn-xs']) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cardapiosPedido->id], ['class'=>'btn btn-primary btn-xs']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cardapiosPedido->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cardapiosPedido->id), 'class'=>'btn btn-danger btn-xs']) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <center>
            <ul class="pagination">
                <?= $this->Paginator->prev('&laquo; ' . __('previous'), ['escape'=>false]) ?>
                <?= $this->Paginator->numbers(['escape'=>false]) ?>
                <?= $this->Paginator->next(__('next') . ' &raquo;', ['escape'=>false]) ?>
            </ul>
            <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} records out of
         {{count}} total, starting on record {{start}}, ending on {{end}}')) ?></p>
        </div>
    </center>
</div>
</div>