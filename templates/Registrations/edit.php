<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Registration $registration
 * @var string[]|\Cake\Collection\CollectionInterface $departments
 * @var string[]|\Cake\Collection\CollectionInterface $categories
 * @var string[]|\Cake\Collection\CollectionInterface $registrationtypes
 * @var string[]|\Cake\Collection\CollectionInterface $reasons
 * @var string[]|\Cake\Collection\CollectionInterface $parentRegistrations
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $registration->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $registration->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Registrations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="registrations form content">
            <?= $this->Form->create($registration) ?>
            <fieldset>
                <legend><?= __('Edit Registration') ?></legend>
                <?php
                    echo $this->Form->control('dateexposure');
                    echo $this->Form->control('fullname');
                    echo $this->Form->control('temp');
                    echo $this->Form->control('ic');
                    echo $this->Form->control('staffno');
                    echo $this->Form->control('vaccinated_box');
                    echo $this->Form->control('vaccinated');
                    echo $this->Form->control('risklevel');
                    echo $this->Form->control('source');
                    echo $this->Form->control('department_id', ['options' => $departments, 'empty' => true]);
                    echo $this->Form->control('category_id', ['options' => $categories, 'empty' => true]);
                    echo $this->Form->control('registrationtype_id', ['options' => $registrationtypes, 'empty' => true]);
                    echo $this->Form->control('return_date', ['empty' => true]);
                    echo $this->Form->control('q1');
                    echo $this->Form->control('q2');
                    echo $this->Form->control('event');
                    echo $this->Form->control('date');
                    echo $this->Form->control('cluster');
                    echo $this->Form->control('q3');
                    echo $this->Form->control('q4');
                    echo $this->Form->control('q5');
                    echo $this->Form->control('q6');
                    echo $this->Form->control('q7');
                    echo $this->Form->control('q8');
                    echo $this->Form->control('pui');
                    echo $this->Form->control('pui_box');
                    echo $this->Form->control('housemate');
                    echo $this->Form->control('quarantine');
                    echo $this->Form->control('quarantine_box');
                    echo $this->Form->control('symptomsbox');
                    echo $this->Form->control('symptoms');
                    echo $this->Form->control('reason_id', ['options' => $reasons, 'empty' => true]);
                    echo $this->Form->control('agree');
                    echo $this->Form->control('s1');
                    echo $this->Form->control('s2');
                    echo $this->Form->control('s3');
                    echo $this->Form->control('s4');
                    echo $this->Form->control('s5');
                    echo $this->Form->control('s6');
                    echo $this->Form->control('s7');
                    echo $this->Form->control('s8');
                    echo $this->Form->control('s9');
                    echo $this->Form->control('s10');
                    echo $this->Form->control('s11');
                    echo $this->Form->control('s12');
                    echo $this->Form->control('s13');
                    echo $this->Form->control('s14');
                    echo $this->Form->control('s15');
                    echo $this->Form->control('s16');
                    echo $this->Form->control('s17');
                    echo $this->Form->control('gate');
                    echo $this->Form->control('parent_id', ['options' => $parentRegistrations, 'empty' => true]);
                    echo $this->Form->control('mac');
                    echo $this->Form->control('typetest');
                    echo $this->Form->control('sample');
                    echo $this->Form->control('selftest');
                    echo $this->Form->control('outcometest');
                    echo $this->Form->control('testdate');
                    echo $this->Form->control('registrationstat_id');
                    echo $this->Form->control('oshremark');
                    echo $this->Form->control('remarks');
                    echo $this->Form->control('working');
                    echo $this->Form->control('qlastworkingdate');
                    echo $this->Form->control('qpusstartdate');
                    echo $this->Form->control('qpusenddate');
                    echo $this->Form->control('qstartdate');
                    echo $this->Form->control('qenddate');
                    echo $this->Form->control('mysejahtera');
                    echo $this->Form->control('typecontact');
                    echo $this->Form->control('verified');
                    echo $this->Form->control('confirmedcase');
                    echo $this->Form->control('relationship');
                    echo $this->Form->control('patientcarelastdate');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
