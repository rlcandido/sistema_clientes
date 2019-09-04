<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>


<div class="row">
    <div class="col-3">
        <div class="card">
          <div class="card-header">
            <b>Ação</b>
        </div>
        <ul class="list-group list-group-flush">
            
            <li class="list-group-item"><?= $this->Html->link(__('Alterar Cliente'), ['action' => 'edit', $user->id]) ?> </li>
            <li class="list-group-item"><?= $this->Form->postLink(__('Deletar Cliente'), ['action' => 'delete', $user->id], ['confirm' => __('Tem certeza que deseja deletar # {0}?', $user->id)]) ?> </li>
            <li class="list-group-item"><?= $this->Html->link(__('Lista Clientes'), ['action' => 'index']) ?> </li>
            <li class="list-group-item"><?= $this->Html->link(__('Novo Cliente'), ['action' => 'add']) ?> </li>
            <li class="list-group-item"><?= $this->Html->link(__('Lista Telefones'), ['controller' => 'Phones', 'action' => 'index']) ?> </li>
            <li class="list-group-item"><?= $this->Html->link(__('Novo Telefone'), ['controller' => 'Phones', 'action' => 'add']) ?> </li>
        </ul>
    </div>
</div>


<div class="col-9">
    <h3><?= h($user->id) ?></h3>
    <table class="table table-hover table-striped">
        <tr>
            <th scope="row"><?= __('Nome_Cliente') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Endereço') ?></th>
            <td><?= h($user->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($user->status) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Relação Telefones') ?></h4>
        <?php if (!empty($user->phones)): ?>
            <table class="table table-hover table-striped">
                <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Cliente Id') ?></th>
                    <th scope="col"><?= __('Telefone') ?></th>
                    <th scope="col" class="actions"><?= __('Ação') ?></th>
                </tr>
                <?php foreach ($user->phones as $phones): ?>
                    <tr>
                        <td><?= h($phones->id) ?></td>
                        <td><?= h($phones->user_id) ?></td>
                        <td><?= h($phones->phone) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('Ver'), ['controller' => 'Phones', 'action' => 'view', $phones->id]) ?>
                            <?= $this->Html->link(__('Editar'), ['controller' => 'Phones', 'action' => 'edit', $phones->id]) ?>
                            <?= $this->Form->postLink(__('Deletar'), ['controller' => 'Phones', 'action' => 'delete', $phones->id], ['confirm' => __('Tem certeza que deseja deletar # {0}?', $phones->id)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>
    </div>
</div>
</div>
