<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Menu') ?></a></li>
        
        <li><?= $this->Html->link(__('Voltar'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List {0}', 'Agregacoes'), ['controller' => 'Agregacoes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', 'Agregaco'), ['controller' => 'Agregacoes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', 'Contas'), ['controller' => 'Contas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', 'Conta'), ['controller' => 'Contas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', 'Pedidos'), ['controller' => 'Pedidos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', 'Pedido'), ['controller' => 'Pedidos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', 'Reservas'), ['controller' => 'Reservas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', 'Reserva'), ['controller' => 'Reservas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="mesas form col-md-10 columns content">
    <?= $this->Form->create($mesa) ?>
    <fieldset>
        <legend><?= 'Editar Mesa' ?></legend>
        <?php
            echo $this->Form->input('numero_mesa');
            echo $this->Form->input('cadeiras');
            echo $this->Form->input('status');
            echo $this->Form->input('reservas._ids', ['options' => $reservas]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
