<nav class="col-lg-2 col-md-3">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href=""><?= __('Actions') ?></a></li>
        <li><?= $this->Html->link(__('Edit {0}', ['Cliente']), ['action' => 'edit', $cliente->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete {0}', ['Cliente']), ['action' => 'delete', $cliente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->id)]) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Clientes']), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['Cliente']), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Reservas']), ['controller' => 'Reservas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['Reserva']), ['controller' => 'Reservas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="clientes view col-lg-10 col-md-9">
    <h3><?= h($cliente->id) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Nome</th>
            <td><?= h($cliente->nome) ?></td>
        </tr>
        <tr>
            <th>Cpf</th>
            <td><?= h($cliente->cpf) ?></td>
        </tr>
        <tr>
            <th>Telefone Residencial</th>
            <td><?= h($cliente->telefone_residencial) ?></td>
        </tr>
        <tr>
            <th>Telefone Celular</th>
            <td><?= h($cliente->telefone_celular) ?></td>
        </tr>
        <tr>
            <th>Status</th>
            <td><?= h($cliente->status) ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($cliente->id) ?></td>
        </tr>
        <tr>
            <th>Dt Nascimento</th>
            <td><?= h($cliente->dt_nascimento) ?></tr>
        </tr>
        <tr>
            <th>Created</th>
            <td><?= h($cliente->created) ?></tr>
        </tr>
        <tr>
            <th>Modified</th>
            <td><?= h($cliente->modified) ?></tr>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related {0}', ['Reservas']) ?></h4>
        <?php if (!empty($cliente->reservas)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Cliente Id</th>
                <th>Lugares</th>
                <th>Datahora</th>
                <th>Status</th>
                <th>Created</th>
                <th>Modified</th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($cliente->reservas as $reservas): ?>
            <tr>
                <td><?= h($reservas->id) ?></td>
                <td><?= h($reservas->cliente_id) ?></td>
                <td><?= h($reservas->lugares) ?></td>
                <td><?= h($reservas->datahora) ?></td>
                <td><?= h($reservas->status) ?></td>
                <td><?= h($reservas->created) ?></td>
                <td><?= h($reservas->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Reservas', 'action' => 'view', $reservas->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Reservas', 'action' => 'edit', $reservas->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Reservas', 'action' => 'delete', $reservas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reservas->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
