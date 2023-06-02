<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Attendance $attendance
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Attendances'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="attendances form content">
            <?= $this->Form->create($attendance) ?>
            <fieldset>
                <legend><?= __('Add Attendance') ?></legend>
                <?php
                    echo $this->Form->control('fullname');
                    echo $this->Form->control('company');
                    echo $this->Form->control('phone');
                    echo $this->Form->control('email');
                    echo $this->Form->control('remark');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
