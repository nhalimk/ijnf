<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rayalist $rayalist
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Rayalist'), ['action' => 'edit', $rayalist->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Rayalist'), ['action' => 'delete', $rayalist->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rayalist->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Rayalists'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Rayalist'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="rayalists view content">
            <h3><?= h($rayalist->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Staffno') ?></th>
                    <td><?= h($rayalist->staffno) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fullname') ?></th>
                    <td><?= h($rayalist->fullname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Department') ?></th>
                    <td><?= h($rayalist->department) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tableno') ?></th>
                    <td><?= h($rayalist->tableno) ?></td>
                </tr>
                <tr>
                    <th><?= __('Gate') ?></th>
                    <td><?= h($rayalist->gate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($rayalist->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($rayalist->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated') ?></th>
                    <td><?= h($rayalist->updated) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
