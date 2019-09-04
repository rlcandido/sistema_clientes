<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ação') ?></li>
        <li><?= $this->Html->link(__('Lista Clientes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista Telefones'), ['controller' => 'Phones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo Telefone'), ['controller' => 'Phones', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Adicionar Cliente') ?></legend>
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
