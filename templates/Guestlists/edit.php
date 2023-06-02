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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $guestlist->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $guestlist->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Guestlists'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="guestlists form content">
            <?= $this->Form->create($guestlist) ?>
            <fieldset>
                <legend><?= __('Edit Guestlist') ?></legend>
                <?php
                    echo $this->Form->control('fullname');
                    echo $this->Form->control('table');
                    echo $this->Form->control('company');
                    echo $this->Form->control('designation');
                    echo $this->Form->control('mobilenumber');
                    echo $this->Form->control('emailaddress');
                    echo $this->Form->control('remark');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
