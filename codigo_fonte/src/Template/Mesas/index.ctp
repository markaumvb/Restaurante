<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Mesa[]|\Cake\Collection\CollectionInterface $mesas
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Novo Mesa'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="mesas index large-9 medium-8 columns content">
    <h3><?= __('Mesas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numero_mesa') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cadeiras') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mesas as $mesa): ?>
            <tr>
                <td><?= $this->Number->format($mesa->id) ?></td>
                <td><?= $this->Number->format($mesa->numero_mesa) ?></td>
                <td><?= $this->Number->format($mesa->cadeiras) ?></td>
                <td><?= h($mesa->status) ?></td>
                <td><?= h($mesa->created) ?></td>
                <td><?= h($mesa->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $mesa->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mesa->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mesa->id], ['confirm' => __('Tem certeza que deseja excluir o registro # {0}?', $mesa->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Primeiro')) ?>
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Próximo') . ' >') ?>
            <?= $this->Paginator->last(__('Último') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, Exibindo {{current}} Registros de {{count}} total')]) ?></p>
    </div>
</div>
