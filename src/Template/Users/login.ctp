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
  </ul>
</div>

</div>
<div class="col-4">
<div class="card text-white bg-dark">
  <div class="card-header">
<legend><?= __('Login') ?></legend>
  </div>
  <div class="card-body">

    <?= $this->Form->create() ?>
    <fieldset>
        
        <?php
            echo $this->Form->control('email');            
            echo $this->Form->control('password');
        ?>
    </fieldset>
    
    </div>
    <div class="card-footer">
    <?= $this->Form->button(__('Entrar'),['class' => 'btn btn-primary btn-block text-white']) ?>        
    </div>
    <?= $this->Form->end() ?>

</div>

</div>
<div class="col-5"></div>
