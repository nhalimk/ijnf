<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Registration> $registrations
 */
?>
<div class="registrations index content">
    <?= $this->Html->link(__('New Registration'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Registrations') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('dateexposure') ?></th>
                    <th><?= $this->Paginator->sort('fullname') ?></th>
                    <th><?= $this->Paginator->sort('temp') ?></th>
                    <th><?= $this->Paginator->sort('ic') ?></th>
                    <th><?= $this->Paginator->sort('staffno') ?></th>
                    <th><?= $this->Paginator->sort('vaccinated_box') ?></th>
                    <th><?= $this->Paginator->sort('vaccinated') ?></th>
                    <th><?= $this->Paginator->sort('risklevel') ?></th>
                    <th><?= $this->Paginator->sort('source') ?></th>
                    <th><?= $this->Paginator->sort('department_id') ?></th>
                    <th><?= $this->Paginator->sort('category_id') ?></th>
                    <th><?= $this->Paginator->sort('registrationtype_id') ?></th>
                    <th><?= $this->Paginator->sort('return_date') ?></th>
                    <th><?= $this->Paginator->sort('q1') ?></th>
                    <th><?= $this->Paginator->sort('q2') ?></th>
                    <th><?= $this->Paginator->sort('event') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('cluster') ?></th>
                    <th><?= $this->Paginator->sort('q3') ?></th>
                    <th><?= $this->Paginator->sort('q4') ?></th>
                    <th><?= $this->Paginator->sort('q5') ?></th>
                    <th><?= $this->Paginator->sort('q6') ?></th>
                    <th><?= $this->Paginator->sort('q7') ?></th>
                    <th><?= $this->Paginator->sort('q8') ?></th>
                    <th><?= $this->Paginator->sort('pui') ?></th>
                    <th><?= $this->Paginator->sort('pui_box') ?></th>
                    <th><?= $this->Paginator->sort('housemate') ?></th>
                    <th><?= $this->Paginator->sort('quarantine') ?></th>
                    <th><?= $this->Paginator->sort('quarantine_box') ?></th>
                    <th><?= $this->Paginator->sort('symptomsbox') ?></th>
                    <th><?= $this->Paginator->sort('symptoms') ?></th>
                    <th><?= $this->Paginator->sort('reason_id') ?></th>
                    <th><?= $this->Paginator->sort('agree') ?></th>
                    <th><?= $this->Paginator->sort('s1') ?></th>
                    <th><?= $this->Paginator->sort('s2') ?></th>
                    <th><?= $this->Paginator->sort('s3') ?></th>
                    <th><?= $this->Paginator->sort('s4') ?></th>
                    <th><?= $this->Paginator->sort('s5') ?></th>
                    <th><?= $this->Paginator->sort('s6') ?></th>
                    <th><?= $this->Paginator->sort('s7') ?></th>
                    <th><?= $this->Paginator->sort('s8') ?></th>
                    <th><?= $this->Paginator->sort('s9') ?></th>
                    <th><?= $this->Paginator->sort('s10') ?></th>
                    <th><?= $this->Paginator->sort('s11') ?></th>
                    <th><?= $this->Paginator->sort('s12') ?></th>
                    <th><?= $this->Paginator->sort('s13') ?></th>
                    <th><?= $this->Paginator->sort('s14') ?></th>
                    <th><?= $this->Paginator->sort('s15') ?></th>
                    <th><?= $this->Paginator->sort('s16') ?></th>
                    <th><?= $this->Paginator->sort('s17') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('gate') ?></th>
                    <th><?= $this->Paginator->sort('parent_id') ?></th>
                    <th><?= $this->Paginator->sort('mac') ?></th>
                    <th><?= $this->Paginator->sort('typetest') ?></th>
                    <th><?= $this->Paginator->sort('sample') ?></th>
                    <th><?= $this->Paginator->sort('selftest') ?></th>
                    <th><?= $this->Paginator->sort('outcometest') ?></th>
                    <th><?= $this->Paginator->sort('testdate') ?></th>
                    <th><?= $this->Paginator->sort('registrationstat_id') ?></th>
                    <th><?= $this->Paginator->sort('oshremark') ?></th>
                    <th><?= $this->Paginator->sort('remarks') ?></th>
                    <th><?= $this->Paginator->sort('working') ?></th>
                    <th><?= $this->Paginator->sort('qlastworkingdate') ?></th>
                    <th><?= $this->Paginator->sort('qpusstartdate') ?></th>
                    <th><?= $this->Paginator->sort('qpusenddate') ?></th>
                    <th><?= $this->Paginator->sort('qstartdate') ?></th>
                    <th><?= $this->Paginator->sort('qenddate') ?></th>
                    <th><?= $this->Paginator->sort('mysejahtera') ?></th>
                    <th><?= $this->Paginator->sort('typecontact') ?></th>
                    <th><?= $this->Paginator->sort('verified') ?></th>
                    <th><?= $this->Paginator->sort('confirmedcase') ?></th>
                    <th><?= $this->Paginator->sort('relationship') ?></th>
                    <th><?= $this->Paginator->sort('patientcarelastdate') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($registrations as $registration): ?>
                <tr>
                    <td><?= $this->Number->format($registration->id) ?></td>
                    <td><?= h($registration->dateexposure) ?></td>
                    <td><?= h($registration->fullname) ?></td>
                    <td><?= h($registration->temp) ?></td>
                    <td><?= h($registration->ic) ?></td>
                    <td><?= h($registration->staffno) ?></td>
                    <td><?= h($registration->vaccinated_box) ?></td>
                    <td><?= h($registration->vaccinated) ?></td>
                    <td><?= h($registration->risklevel) ?></td>
                    <td><?= h($registration->source) ?></td>
                    <td><?= $registration->has('department') ? $this->Html->link($registration->department->id, ['controller' => 'Departments', 'action' => 'view', $registration->department->id]) : '' ?></td>
                    <td><?= $registration->has('category') ? $this->Html->link($registration->category->id, ['controller' => 'Categories', 'action' => 'view', $registration->category->id]) : '' ?></td>
                    <td><?= $registration->has('registrationtype') ? $this->Html->link($registration->registrationtype->id, ['controller' => 'Registrationtypes', 'action' => 'view', $registration->registrationtype->id]) : '' ?></td>
                    <td><?= h($registration->return_date) ?></td>
                    <td><?= h($registration->q1) ?></td>
                    <td><?= h($registration->q2) ?></td>
                    <td><?= h($registration->event) ?></td>
                    <td><?= h($registration->date) ?></td>
                    <td><?= h($registration->cluster) ?></td>
                    <td><?= h($registration->q3) ?></td>
                    <td><?= h($registration->q4) ?></td>
                    <td><?= h($registration->q5) ?></td>
                    <td><?= h($registration->q6) ?></td>
                    <td><?= h($registration->q7) ?></td>
                    <td><?= h($registration->q8) ?></td>
                    <td><?= h($registration->pui) ?></td>
                    <td><?= $registration->pui_box === null ? '' : $this->Number->format($registration->pui_box) ?></td>
                    <td><?= h($registration->housemate) ?></td>
                    <td><?= h($registration->quarantine) ?></td>
                    <td><?= $registration->quarantine_box === null ? '' : $this->Number->format($registration->quarantine_box) ?></td>
                    <td><?= h($registration->symptomsbox) ?></td>
                    <td><?= h($registration->symptoms) ?></td>
                    <td><?= $registration->has('reason') ? $this->Html->link($registration->reason->id, ['controller' => 'Reasons', 'action' => 'view', $registration->reason->id]) : '' ?></td>
                    <td><?= h($registration->agree) ?></td>
                    <td><?= h($registration->s1) ?></td>
                    <td><?= h($registration->s2) ?></td>
                    <td><?= h($registration->s3) ?></td>
                    <td><?= h($registration->s4) ?></td>
                    <td><?= h($registration->s5) ?></td>
                    <td><?= h($registration->s6) ?></td>
                    <td><?= h($registration->s7) ?></td>
                    <td><?= h($registration->s8) ?></td>
                    <td><?= h($registration->s9) ?></td>
                    <td><?= h($registration->s10) ?></td>
                    <td><?= h($registration->s11) ?></td>
                    <td><?= h($registration->s12) ?></td>
                    <td><?= h($registration->s13) ?></td>
                    <td><?= h($registration->s14) ?></td>
                    <td><?= h($registration->s15) ?></td>
                    <td><?= h($registration->s16) ?></td>
                    <td><?= h($registration->s17) ?></td>
                    <td><?= h($registration->created) ?></td>
                    <td><?= h($registration->modified) ?></td>
                    <td><?= h($registration->gate) ?></td>
                    <td><?= $registration->has('parent_registration') ? $this->Html->link($registration->parent_registration->id, ['controller' => 'Registrations', 'action' => 'view', $registration->parent_registration->id]) : '' ?></td>
                    <td><?= h($registration->mac) ?></td>
                    <td><?= h($registration->typetest) ?></td>
                    <td><?= h($registration->sample) ?></td>
                    <td><?= h($registration->selftest) ?></td>
                    <td><?= h($registration->outcometest) ?></td>
                    <td><?= h($registration->testdate) ?></td>
                    <td><?= $registration->registrationstat_id === null ? '' : $this->Number->format($registration->registrationstat_id) ?></td>
                    <td><?= h($registration->oshremark) ?></td>
                    <td><?= h($registration->remarks) ?></td>
                    <td><?= h($registration->working) ?></td>
                    <td><?= h($registration->qlastworkingdate) ?></td>
                    <td><?= h($registration->qpusstartdate) ?></td>
                    <td><?= h($registration->qpusenddate) ?></td>
                    <td><?= h($registration->qstartdate) ?></td>
                    <td><?= h($registration->qenddate) ?></td>
                    <td><?= $registration->mysejahtera === null ? '' : $this->Number->format($registration->mysejahtera) ?></td>
                    <td><?= $registration->typecontact === null ? '' : $this->Number->format($registration->typecontact) ?></td>
                    <td><?= h($registration->verified) ?></td>
                    <td><?= h($registration->confirmedcase) ?></td>
                    <td><?= h($registration->relationship) ?></td>
                    <td><?= h($registration->patientcarelastdate) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $registration->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $registration->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $registration->id], ['confirm' => __('Are you sure you want to delete # {0}?', $registration->id)]) ?>
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
