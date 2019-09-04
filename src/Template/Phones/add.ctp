<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Phone $phone
 */
?>

<script type="text/javascript">
  $(document).ready(function($){  
   var SPMaskBehavior = function (val) {
    return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
  },
  spOptions = {
    onKeyPress: function(val, e, field, options) {
      field.mask(SPMaskBehavior.apply({}, arguments), options);
    }
  };

  $('#phone').mask(SPMaskBehavior, spOptions);   
});
</script>


<div class="row">
  <div class="col-3">
    <div class="card">
      <div class="card-header">
        <b>Ação</b>
      </div>
      <ul class="list-group list-group-flush">    
       <li class="list-group-item"><?= $this->Html->link(__('Lista Telefones'), ['action' => 'index']) ?></li>
       <li class="list-group-item"><?= $this->Html->link(__('Lista Clientes'), ['controller' => 'Users', 'action' => 'index']) ?></li>
       <li class="list-group-item"><?= $this->Html->link(__('Novo Cliente'), ['controller' => 'Users', 'action' => 'add']) ?></li>
     </ul>
   </div>
 </div>        
 

 <div class="col-7">
  <?= $this->Form->create($phone) ?>
  <fieldset>
    <legend><?= __('Adicionar Telefone') ?></legend>
    <hr>
    <?php
    echo $this->Form->control('user_id', ['options' => $users]);
    echo $this->Form->control('phone');
    ?>
  </fieldset>
  <?= $this->Form->button(__('Salvar'),['class'=>'btn btn-primary']) ?>
  <?= $this->Form->end() ?>
</div>
<div class="col-2"></div>
</div>
