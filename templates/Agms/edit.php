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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $agm->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $agm->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Agms'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="agms form content">
            <?= $this->Form->create($agm) ?>
            <fieldset>
                <legend><?= __('Edit Agm') ?></legend>
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
