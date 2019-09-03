<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Phone $phone
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Phone'), ['action' => 'edit', $phone->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Phone'), ['action' => 'delete', $phone->id], ['confirm' => __('Are you sure you want to delete # {0}?', $phone->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Phones'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Phone'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="phones view large-9 medium-8 columns content">
    <h3><?= h($phone->id) ?></h3>
    <table class="vertical-table">
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
