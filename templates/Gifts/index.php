<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Gift> $gifts
 */
?>
<div class="gifts index content">
    <?= $this->Html->link(__('New Gift'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Gifts') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('staffno') ?></th>
                    <th><?= $this->Paginator->sort('fullname') ?></th>
                    <th><?= $this->Paginator->sort('department') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($gifts as $gift): ?>
                <tr>
                    <td><?= $this->Number->format($gift->id) ?></td>
                    <td><?= h($gift->staffno) ?></td>
                    <td><?= h($gift->fullname) ?></td>
                    <td><?= h($gift->department) ?></td>
                    <td><?= h($gift->created) ?></td>
                    <td><?= h($gift->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $gift->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $gift->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $gift->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gift->id)]) ?>
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
