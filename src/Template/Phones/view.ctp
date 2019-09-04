<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Phone $phone
 */
?>



<div class="row">
<div class="col-3">
<div class="card">
  <div class="card-header">
    <b>Ação</b>
  </div>
  <ul class="list-group list-group-flush">    
            <li class="list-group-item"><?= $this->Html->link(__('Alterar Telefone'), ['action' => 'edit', $phone->id]) ?> </li>
        <li class="list-group-item"><?= $this->Form->postLink(__('Deletar Telefone'), ['action' => 'delete', $phone->id], ['confirm' => __('Tem certeza que deseja deletar # {0}?', $phone->id)]) ?> </li>
        <li class="list-group-item"><?= $this->Html->link(__('Lista Telefones'), ['action' => 'index']) ?> </li>
        <li class="list-group-item"><?= $this->Html->link(__('Novo Telefone'), ['action' => 'add']) ?> </li>
        <li class="list-group-item"><?= $this->Html->link(__('Lista Clientes'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li class="list-group-item"><?= $this->Html->link(__('Novo Cliente'), ['controller' => 'Users', 'action' => 'add']) ?> </li>

  </ul>
</div>
</div>

   
<div class="col-7">
    <h3><?= h($phone->id) ?></h3>
    <table class="table table-hover table-striped">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $phone->has('user') ? $this->Html->link($phone->user->username, ['controller' => 'Users', 'action' => 'view', $phone->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($phone->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($phone->id) ?></td>
        </tr>
    </table>
</div>
<div class="col-2"></div>
</div>
