<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Menu') ?></a></li>
        <li><?= $this->Html->link(__('Voltar'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="mesas form col-md-10 columns content">
    <?= $this->Form->create($mesa) ?>
    <fieldset>
        <legend><?= 'Nova mesa' ?></legend>
        <?php
            echo $this->Form->input('numero_mesa');
            echo $this->Form->input('cadeiras');
            echo $this->Form->input('status');
            echo $this->Form->input('reservas._ids', ['options' => $reservas]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
