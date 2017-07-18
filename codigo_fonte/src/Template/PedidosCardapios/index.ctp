<div class="row">
<nav class="col-md-2" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Actions') ?></a></li>
        <li><?= $this->Html->link(__('New {0}', ['Pedidos Cardapio']), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Cardapios']), ['controller' => 'Cardapios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Cardapio']), ['controller' => 'Cardapios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Pedidos']), ['controller' => 'Pedidos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Pedido']), ['controller' => 'Pedidos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pedidosCardapios index col-md-10 columns content">
    <h3>Pedidos Cardapios</h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('cardapio_id') ?></th>
                <th><?= $this->Paginator->sort('pedido_id') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pedidosCardapios as $pedidosCardapio): ?>
            <tr>
                <td><?= $this->Number->format($pedidosCardapio->id) ?></td>
                <td><?= $pedidosCardapio->has('cardapio') ? $this->Html->link($pedidosCardapio->cardapio->id, ['controller' => 'Cardapios', 'action' => 'view', $pedidosCardapio->cardapio->id]) : '' ?></td>
                <td><?= $this->Number->format($pedidosCardapio->pedido_id) ?></td>
                <td><?= h($pedidosCardapio->created) ?></td>
                <td><?= h($pedidosCardapio->modified) ?></td>
                <td class="actions" style="white-space:nowrap">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $pedidosCardapio->id], ['class'=>'btn btn-default btn-xs']) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pedidosCardapio->id], ['class'=>'btn btn-primary btn-xs']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pedidosCardapio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pedidosCardapio->id), 'class'=>'btn btn-danger btn-xs']) ?>
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