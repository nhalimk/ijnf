<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Guestlist $guestlist
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Guestlist'), ['action' => 'edit', $guestlist->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Guestlist'), ['action' => 'delete', $guestlist->id], ['confirm' => __('Are you sure you want to delete # {0}?', $guestlist->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Guestlists'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Guestlist'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="guestlists view content">
            <h3><?= h($guestlist->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Fullname') ?></th>
                    <td><?= h($guestlist->fullname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Table') ?></th>
                    <td><?= h($guestlist->table) ?></td>
                </tr>
                <tr>
                    <th><?= __('Company') ?></th>
                    <td><?= h($guestlist->company) ?></td>
                </tr>
                <tr>
                    <th><?= __('Designation') ?></th>
                    <td><?= h($guestlist->designation) ?></td>
                </tr>
                <tr>
                    <th><?= __('Emailaddress') ?></th>
                    <td><?= h($guestlist->emailaddress) ?></td>
                </tr>
                <tr>
                    <th><?= __('Remark') ?></th>
                    <td><?= h($guestlist->remark) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($guestlist->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mobilenumber') ?></th>
                    <td><?= $guestlist->mobilenumber === null ? '' : $this->Number->format($guestlist->mobilenumber) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($guestlist->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($guestlist->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
