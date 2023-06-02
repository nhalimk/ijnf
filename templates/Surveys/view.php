<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Survey $survey
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Survey'), ['action' => 'edit', $survey->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Survey'), ['action' => 'delete', $survey->id], ['confirm' => __('Are you sure you want to delete # {0}?', $survey->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Surveys'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Survey'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="surveys view content">
            <h3><?= h($survey->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Fullname') ?></th>
                    <td><?= h($survey->fullname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= h($survey->phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($survey->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Q1') ?></th>
                    <td><?= h($survey->q1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Q2') ?></th>
                    <td><?= h($survey->q2) ?></td>
                </tr>
                <tr>
                    <th><?= __('Remark') ?></th>
                    <td><?= h($survey->remark) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($survey->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($survey->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($survey->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
