<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Cardapio[]|\Cake\Collection\CollectionInterface $cardapios
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Novo Item de cardápio'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cardapios index large-9 medium-8 columns content">
    <h3><?= __('Itens de Cardápio') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('codigo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('preco') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cardapios as $cardapio): ?>
            <tr>
                <td><?= h($cardapio->codigo) ?></td>
                <td><?= h($cardapio->descricao) ?></td>
                <td><?= h($cardapio->created) ?></td>
                <td><?= h($cardapio->modified) ?></td>
                <td><?= $this->Number->format($cardapio->preco) ?></td>
                <td><?= h($cardapio->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cardapio->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cardapio->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cardapio->id], ['confirm' => __('Tem certeza que deseja excluir o registro # {0}?', $cardapio->id)]) ?>
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
