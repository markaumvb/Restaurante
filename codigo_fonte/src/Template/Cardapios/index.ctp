<div class="row">
<nav class="col-md-2" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Menu') ?></a></li>
        <li><?= $this->Html->link(__('Novo {0}', ['Cardapio']), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cardapios index col-md-10 columns content">
    <h3>Items de cardápio</h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('Código') ?></th>
                <th><?= $this->Paginator->sort('Descrição') ?></th>
                <th><?= $this->Paginator->sort('Preço') ?></th>
                <th><?= $this->Paginator->sort('Status') ?></th>
                <th class="actions"><?= __('ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cardapios as $cardapio): ?>
            <tr>
                <td><?= h($cardapio->codigo) ?></td>
                <td><?= h($cardapio->descricao) ?></td>
                <td><?= $this->Number->format($cardapio->preco) ?></td>
                <td><?= h($cardapio->status) ?></td>
                <td class="actions" style="white-space:nowrap">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $cardapio->id], ['class'=>'btn btn-default btn-xs']) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $cardapio->id], ['class'=>'btn btn-primary btn-xs']) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $cardapio->id], ['confirm' => __('Você tem certeza que deseja excluir o item # {0}?', $cardapio->codigo), 'class'=>'btn btn-danger btn-xs']) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <center>
            <ul class="pagination">
                <?= $this->Paginator->prev('&laquo; ' . __('anterior'), ['escape'=>false]) ?>
                <?= $this->Paginator->numbers(['escape'=>false]) ?>
                <?= $this->Paginator->next(__('próximo') . ' &raquo;', ['escape'=>false]) ?>
            </ul>
            <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, exibindo {{current}} registro em um total de: 
         {{count}}, iniciando de {{start}}, terminando em {{end}}')) ?></p>
        </div>
    </center>
</div>
</div>