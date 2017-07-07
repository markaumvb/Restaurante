<?php
/**
  * @var \App\View\AppView $this
  */
?>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Listar Mesas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="mesas form large-9 medium-8 columns content">
    <?= $this->Form->create($mesa) ?>
    <fieldset>
        <legend><?= __('Nova Mesa...') ?></legend>
        <?php
            echo $this->Form->control('numero_mesa');
            echo $this->Form->control('cadeiras');
            $arrStatus=array('Livre'=>"Livre",'Ocupada'=>"Ocupada",'Aguardando Limpeza'=>"Esperando Limpeza", 'Reservada'=>"Reservada");
            echo $this->Form->input('status', array('options'=>$arrStatus, 'label'=>false,
                                  'selected'=>'Your Value')); 
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
