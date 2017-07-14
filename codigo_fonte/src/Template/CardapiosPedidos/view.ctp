<nav class="col-lg-2 col-md-3">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href=""><?= __('Actions') ?></a></li>
        <li><?= $this->Html->link(__('Edit {0}', ['Cardapios Pedido']), ['action' => 'edit', $cardapiosPedido->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete {0}', ['Cardapios Pedido']), ['action' => 'delete', $cardapiosPedido->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cardapiosPedido->id)]) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Cardapios Pedidos']), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['Cardapios Pedido']), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Pedidos']), ['controller' => 'Pedidos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['Pedido']), ['controller' => 'Pedidos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Cardapios']), ['controller' => 'Cardapios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['Cardapio']), ['controller' => 'Cardapios', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cardapiosPedidos view col-lg-10 col-md-9">
    <h3><?= h($cardapiosPedido->id) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Pedido</th>
            <td><?= $cardapiosPedido->has('pedido') ? $this->Html->link($cardapiosPedido->pedido->id, ['controller' => 'Pedidos', 'action' => 'view', $cardapiosPedido->pedido->id]) : '' ?></td>
        </tr>
        <tr>
            <th>Cardapio</th>
            <td><?= $cardapiosPedido->has('cardapio') ? $this->Html->link($cardapiosPedido->cardapio->id, ['controller' => 'Cardapios', 'action' => 'view', $cardapiosPedido->cardapio->id]) : '' ?></td>
        </tr>
        <tr>
            <th>Obs</th>
            <td><?= h($cardapiosPedido->obs) ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($cardapiosPedido->id) ?></td>
        </tr>
        <tr>
            <th>Created</th>
            <td><?= h($cardapiosPedido->created) ?></tr>
        </tr>
        <tr>
            <th>Modified</th>
            <td><?= h($cardapiosPedido->modified) ?></tr>
        </tr>
    </table>
</div>
