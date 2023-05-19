<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Agm $agm
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Agm'), ['action' => 'edit', $agm->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Agm'), ['action' => 'delete', $agm->id], ['confirm' => __('Are you sure you want to delete # {0}?', $agm->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Agms'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Agm'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="agms view content">
            <h3><?= h($agm->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Staffno') ?></th>
                    <td><?= h($agm->staffno) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fullname') ?></th>
                    <td><?= h($agm->fullname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Department') ?></th>
                    <td><?= h($agm->department) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tableno') ?></th>
                    <td><?= h($agm->tableno) ?></td>
                </tr>
                <tr>
                    <th><?= __('Gate') ?></th>
                    <td><?= h($agm->gate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($agm->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($agm->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated') ?></th>
                    <td><?= h($agm->updated) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
