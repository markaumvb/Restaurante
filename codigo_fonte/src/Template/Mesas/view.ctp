<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Mesa $mesa
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Mesa'), ['action' => 'edit', $mesa->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Mesa'), ['action' => 'delete', $mesa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mesa->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Mesas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mesa'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="mesas view large-9 medium-8 columns content">
    <h3><?= h($mesa->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($mesa->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($mesa->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numero Mesa') ?></th>
            <td><?= $this->Number->format($mesa->numero_mesa) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cadeiras') ?></th>
            <td><?= $this->Number->format($mesa->cadeiras) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($mesa->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($mesa->modified) ?></td>
        </tr>
    </table>
</div>
