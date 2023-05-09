<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Gift $gift
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $gift->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $gift->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Gifts'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="gifts form content">
            <?= $this->Form->create($gift) ?>
            <fieldset>
                <legend><?= __('Edit Gift') ?></legend>
                <?php
                    echo $this->Form->control('staffno');
                    echo $this->Form->control('fullname');
                    echo $this->Form->control('department');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
