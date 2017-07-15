<div class="row">
<nav class="col-md-2" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Actions') ?></a></li>
        <li><?= $this->Html->link(__('New {0}', ['Pedidos Cardapio']), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Pedidos']), ['controller' => 'Pedidos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Pedido']), ['controller' => 'Pedidos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Cardapios']), ['controller' => 'Cardapios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Cardapio']), ['controller' => 'Cardapios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pedidosCardapios index col-md-10 columns content">
    <h3>Pedidos Cardapios</h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('pedido_id') ?></th>
                <th><?= $this->Paginator->sort('cardapio_id') ?></th>
                <th><?= $this->Paginator->sort('obs') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pedidosCardapios as $pedidosCardapio): ?>
            <tr>
                <td><?= $this->Number->format($pedidosCardapio->id) ?></td>
                <td><?= $pedidosCardapio->has('pedido') ? $this->Html->link($pedidosCardapio->pedido->id, ['controller' => 'Pedidos', 'action' => 'view', $pedidosCardapio->pedido->id]) : '' ?></td>
                <td><?= $pedidosCardapio->has('cardapio') ? $this->Html->link($pedidosCardapio->cardapio->id, ['controller' => 'Cardapios', 'action' => 'view', $pedidosCardapio->cardapio->id]) : '' ?></td>
                <td><?= h($pedidosCardapio->obs) ?></td>
                <td><?= h($pedidosCardapio->created) ?></td>
                <td><?= h($pedidosCardapio->modified) ?></td>
                
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
    </center>
</div>
</div>