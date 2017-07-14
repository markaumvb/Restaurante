<nav class="col-lg-2 col-md-3">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href=""><?= __('Menu') ?></a></li>
        <li><?= $this->Html->link(__('Voltar'), ['action' => 'index']) ?> </li>
    </ul>
</nav>
<div class="cardapios view col-lg-10 col-md-9">
    <h3><?= h($cardapio->codigo) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Descrição</th>
            <td><?= h($cardapio->descricao) ?></td>
        </tr>
        <tr>
            <th>Status</th>
            <td><?= h($cardapio->status) ?></td>
        </tr>
        <tr>
            <th>Preço</th>
            <td><?= $this->Number->format($cardapio->preco) ?></td>
        </tr>
        <tr>
            <th>Criado em</th>
            <td><?= h($cardapio->created) ?></tr>
        </tr>
        <tr>
            <th>Modificado em</th>
            <td><?= h($cardapio->modified) ?></tr>
        </tr>
    </table>
</div>
