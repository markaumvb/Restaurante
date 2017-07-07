<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Cardapio $cardapio
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cardapio'), ['action' => 'edit', $cardapio->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cardapio'), ['action' => 'delete', $cardapio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cardapio->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cardapios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cardapio'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cardapios view large-9 medium-8 columns content">
    <h3><?= h($cardapio->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Codigo') ?></th>
            <td><?= h($cardapio->codigo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($cardapio->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($cardapio->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cardapio->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Preco') ?></th>
            <td><?= $this->Number->format($cardapio->preco) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($cardapio->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($cardapio->modified) ?></td>
        </tr>
    </table>
</div>
