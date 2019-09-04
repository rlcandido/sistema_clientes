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
        
         <li class="list-group-item"><?= $this->Html->link(__('Lista Clientes'), ['action' => 'index']) ?></li>
        <li class="list-group-item"><?= $this->Html->link(__('Lista Telefones'), ['controller' => 'Phones', 'action' => 'index']) ?></li>
        <li class="list-group-item"><?= $this->Html->link(__('Novo Telefone'), ['controller' => 'Phones', 'action' => 'add']) ?></li>
  </ul>
</div>
</div>


<div class="col-7">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Adicionar Cliente') ?></legend>
        <hr>
        <?php
            echo $this->Form->control('username');
            echo $this->Form->control('email');
            echo $this->Form->control('password');            
            echo $this->Form->control('confirmar_password', ['type'=> 'password']);
            echo $this->Form->control('address');
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar'),['class' => 'btn btn-primary']) ?>
    <?= $this->Form->end() ?>
</div>
<div class="col-2"></div>
</div>
