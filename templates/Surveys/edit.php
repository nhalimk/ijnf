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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $survey->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $survey->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Surveys'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="surveys form content">
            <?= $this->Form->create($survey) ?>
            <fieldset>
                <legend><?= __('Edit Survey') ?></legend>
                <?php
                    echo $this->Form->control('fullname');
                    echo $this->Form->control('phone');
                    echo $this->Form->control('email');
                    echo $this->Form->control('q1');
                    echo $this->Form->control('q2');
                    echo $this->Form->control('remark');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
