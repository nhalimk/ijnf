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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $rayalist->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $rayalist->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Rayalists'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="rayalists form content">
            <?= $this->Form->create($rayalist) ?>
            <fieldset>
                <legend><?= __('Edit Rayalist') ?></legend>
                <?php
                    echo $this->Form->control('staffno');
                    echo $this->Form->control('fullname');
                    echo $this->Form->control('department');
                    echo $this->Form->control('tableno');
                    echo $this->Form->control('gate');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
