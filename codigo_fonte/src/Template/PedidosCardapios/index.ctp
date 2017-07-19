
<div class="pedidosCardapios index col-md-10 columns content">
    <h3>Preparar Pedidos</h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('cardapio_id') ?></th>
                <th><?= $this->Paginator->sort('pedido_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pedidosCardapios as $pedidosCardapio): ?>
            <tr>
                <td><?= $pedidosCardapio->has('cardapio') ? $this->Html->link($pedidosCardapio->cardapio->id, ['controller' => 'Cardapios', 'action' => 'view', $pedidosCardapio->cardapio->id]) : '' ?></td>
                <td><?= $this->Number->format($pedidosCardapio->pedido_id) ?></td>

                <td class="actions" style="white-space:nowrap">
                    <?= $this->Html->link(__('Iniciar Preparo'), ['action' => 'view', $pedidosCardapio->id], ['class'=>'btn btn-default btn-xs']) ?>
                    <?= $this->Html->link(__('Finalizar'), ['action' => 'edit', $pedidosCardapio->id], ['class'=>'btn btn-primary btn-xs']) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
