<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Phone[]|\Cake\Collection\CollectionInterface $phones
 */
?>


<div class="row">
<div class="col-3">
<div class="card">
  <div class="card-header">
    <b>Ação</b>
  </div>
  <ul class="list-group list-group-flush">    
        
        <li class="list-group-item"><?= $this->Html->link(__('Novo Telefone'), ['action' => 'add']) ?></li>
        <li class="list-group-item"><?= $this->Html->link(__('Lista Clientes'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li class="list-group-item"><?= $this->Html->link(__('Novo Cliente'), ['controller' => 'Users', 'action' => 'add']) ?></li>
  </ul>
</div>
</div>

<div class="col-9">
    <h3><?= __('Telefones') ?></h3>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Nome_cliente') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Telefone') ?></th>
                <th scope="col" class="actions"><?= __('Ação') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($phones as $phone): ?>
            <tr>
                <td><?= $this->Number->format($phone->id) ?></td>
                <td><?= $phone->has('user') ? $this->Html->link($phone->user->username, ['controller' => 'Users', 'action' => 'view', $phone->user->id]) : '' ?></td>
                <td><?= h($phone->phone) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $phone->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $phone->id]) ?>
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $phone->id], ['confirm' => __('Tem certeza que deseja deletar # {0}?', $phone->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('primeiro')) ?>
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('próximo') . ' >') ?>
            <?= $this->Paginator->last(__('ultimo') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Pagina {{page}} de {{pages}}, mostrando {{current}} registro(s) do {{count}} total')]) ?></p>
    </div>
</div>
</div>
