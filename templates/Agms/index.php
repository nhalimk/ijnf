<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Agm> $agms
 */
?>
<div class="agms index content">
    <?= $this->Html->link(__('New Agm'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Agms') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('staffno') ?></th>
                    <th><?= $this->Paginator->sort('fullname') ?></th>
                    <th><?= $this->Paginator->sort('department') ?></th>
                    <th><?= $this->Paginator->sort('tableno') ?></th>
                    <th><?= $this->Paginator->sort('gate') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('updated') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($agms as $agm): ?>
                <tr>
                    <td><?= $this->Number->format($agm->id) ?></td>
                    <td><?= h($agm->staffno) ?></td>
                    <td><?= h($agm->fullname) ?></td>
                    <td><?= h($agm->department) ?></td>
                    <td><?= h($agm->tableno) ?></td>
                    <td><?= h($agm->gate) ?></td>
                    <td><?= h($agm->created) ?></td>
                    <td><?= h($agm->updated) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $agm->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $agm->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $agm->id], ['confirm' => __('Are you sure you want to delete # {0}?', $agm->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
