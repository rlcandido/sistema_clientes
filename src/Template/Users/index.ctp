<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>

<div class="row">
<div class="col-3">
<div class="card">
  <div class="card-header">
    <b>Ação</b>
  </div>
  <ul class="list-group list-group-flush">    
        
        <li class="list-group-item"><?= $this->Html->link(__('Novo Cliente'), ['action' => 'add']) ?></li>
        <li class="list-group-item"><?= $this->Html->link(__('Lista Telefones'), ['controller' => 'Phones', 'action' => 'index']) ?></li>
        <li class="list-group-item"><?= $this->Html->link(__('Novo Telefone'), ['controller' => 'Phones', 'action' => 'add']) ?></li>
  </ul>
</div>
</div>


<div class="col-9">
    <h3><?= __('Clientes') ?></h3>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Nome_Cliente') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Endereço') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->id) ?></td>
                <td><?= h($user->username) ?></td>
                <td><?= h($user->email) ?></td>                
                <td><?= h($user->address) ?></td>
                <td><?= $this->Number->format($user->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $user->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $user->id]) ?>
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $user->id], ['confirm' => __('Tem certeza que deseja deletar # {0}?', $user->id)]) ?>
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
