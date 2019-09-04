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

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acão') ?></li>
        <li><?= $this->Html->link(__('Lista Telefones'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista Clientes'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo Cliente'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="phones form large-9 medium-8 columns content">
    <?= $this->Form->create($phone) ?>
    <fieldset>
        <legend><?= __('Adicionar Telefone') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('phone');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
