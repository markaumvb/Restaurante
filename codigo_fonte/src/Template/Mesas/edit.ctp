<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $mesa->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $mesa->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Mesas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="mesas form large-9 medium-8 columns content">
    <?= $this->Form->create($mesa) ?>
    <fieldset>
        <legend><?= __('Edit Mesa') ?></legend>
        <?php
            echo $this->Form->control('numero_mesa');
            echo $this->Form->control('cadeiras');
            

            $arrStatus=array('L'=>"Livre",'O'=>"Ocupada",'Z'=>"Esperando Limpeza", 'R'=>"Reservada");
            echo $this->Form->input('status', array('options'=>$arrStatus, 'label'=>false,
                                  'selected'=>'Your Value')); 
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
