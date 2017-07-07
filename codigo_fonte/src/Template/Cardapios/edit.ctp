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
                ['action' => 'delete', $cardapio->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cardapio->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Cardapios'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="cardapios form large-9 medium-8 columns content">
    <?= $this->Form->create($cardapio) ?>
    <fieldset>
        <legend><?= __('Edit Cardapio') ?></legend>
        <?php
            echo $this->Form->control('codigo');
            echo $this->Form->control('descricao');
            echo $this->Form->input('preco');
            $arrStatus=array('Ativo'=>"Ativo",'Desativado'=>"Desativado");
            echo $this->Form->input('status', array('options'=>$arrStatus, 'label'=>false,
                                  'selected'=>'Your Value')); 
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
