<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Attendance $attendance
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Attendance'), ['action' => 'edit', $attendance->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Attendance'), ['action' => 'delete', $attendance->id], ['confirm' => __('Are you sure you want to delete # {0}?', $attendance->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Attendances'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Attendance'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="attendances view content">
            <h3><?= h($attendance->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Fullname') ?></th>
                    <td><?= h($attendance->fullname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Company') ?></th>
                    <td><?= h($attendance->company) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= h($attendance->phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($attendance->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Remark') ?></th>
                    <td><?= h($attendance->remark) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($attendance->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($attendance->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($attendance->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
