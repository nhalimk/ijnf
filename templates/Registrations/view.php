<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Registration $registration
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Registration'), ['action' => 'edit', $registration->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Registration'), ['action' => 'delete', $registration->id], ['confirm' => __('Are you sure you want to delete # {0}?', $registration->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Registrations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Registration'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="registrations view content">
            <h3><?= h($registration->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Dateexposure') ?></th>
                    <td><?= h($registration->dateexposure) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fullname') ?></th>
                    <td><?= h($registration->fullname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Temp') ?></th>
                    <td><?= h($registration->temp) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ic') ?></th>
                    <td><?= h($registration->ic) ?></td>
                </tr>
                <tr>
                    <th><?= __('Staffno') ?></th>
                    <td><?= h($registration->staffno) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vaccinated Box') ?></th>
                    <td><?= h($registration->vaccinated_box) ?></td>
                </tr>
                <tr>
                    <th><?= __('Risklevel') ?></th>
                    <td><?= h($registration->risklevel) ?></td>
                </tr>
                <tr>
                    <th><?= __('Source') ?></th>
                    <td><?= h($registration->source) ?></td>
                </tr>
                <tr>
                    <th><?= __('Department') ?></th>
                    <td><?= $registration->has('department') ? $this->Html->link($registration->department->id, ['controller' => 'Departments', 'action' => 'view', $registration->department->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Category') ?></th>
                    <td><?= $registration->has('category') ? $this->Html->link($registration->category->id, ['controller' => 'Categories', 'action' => 'view', $registration->category->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Registrationtype') ?></th>
                    <td><?= $registration->has('registrationtype') ? $this->Html->link($registration->registrationtype->id, ['controller' => 'Registrationtypes', 'action' => 'view', $registration->registrationtype->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Event') ?></th>
                    <td><?= h($registration->event) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($registration->date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cluster') ?></th>
                    <td><?= h($registration->cluster) ?></td>
                </tr>
                <tr>
                    <th><?= __('Symptomsbox') ?></th>
                    <td><?= h($registration->symptomsbox) ?></td>
                </tr>
                <tr>
                    <th><?= __('Symptoms') ?></th>
                    <td><?= h($registration->symptoms) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reason') ?></th>
                    <td><?= $registration->has('reason') ? $this->Html->link($registration->reason->id, ['controller' => 'Reasons', 'action' => 'view', $registration->reason->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Agree') ?></th>
                    <td><?= h($registration->agree) ?></td>
                </tr>
                <tr>
                    <th><?= __('S1') ?></th>
                    <td><?= h($registration->s1) ?></td>
                </tr>
                <tr>
                    <th><?= __('S2') ?></th>
                    <td><?= h($registration->s2) ?></td>
                </tr>
                <tr>
                    <th><?= __('S3') ?></th>
                    <td><?= h($registration->s3) ?></td>
                </tr>
                <tr>
                    <th><?= __('S4') ?></th>
                    <td><?= h($registration->s4) ?></td>
                </tr>
                <tr>
                    <th><?= __('S5') ?></th>
                    <td><?= h($registration->s5) ?></td>
                </tr>
                <tr>
                    <th><?= __('S6') ?></th>
                    <td><?= h($registration->s6) ?></td>
                </tr>
                <tr>
                    <th><?= __('S7') ?></th>
                    <td><?= h($registration->s7) ?></td>
                </tr>
                <tr>
                    <th><?= __('S8') ?></th>
                    <td><?= h($registration->s8) ?></td>
                </tr>
                <tr>
                    <th><?= __('S9') ?></th>
                    <td><?= h($registration->s9) ?></td>
                </tr>
                <tr>
                    <th><?= __('S10') ?></th>
                    <td><?= h($registration->s10) ?></td>
                </tr>
                <tr>
                    <th><?= __('S11') ?></th>
                    <td><?= h($registration->s11) ?></td>
                </tr>
                <tr>
                    <th><?= __('S12') ?></th>
                    <td><?= h($registration->s12) ?></td>
                </tr>
                <tr>
                    <th><?= __('S13') ?></th>
                    <td><?= h($registration->s13) ?></td>
                </tr>
                <tr>
                    <th><?= __('S14') ?></th>
                    <td><?= h($registration->s14) ?></td>
                </tr>
                <tr>
                    <th><?= __('S15') ?></th>
                    <td><?= h($registration->s15) ?></td>
                </tr>
                <tr>
                    <th><?= __('S16') ?></th>
                    <td><?= h($registration->s16) ?></td>
                </tr>
                <tr>
                    <th><?= __('S17') ?></th>
                    <td><?= h($registration->s17) ?></td>
                </tr>
                <tr>
                    <th><?= __('Gate') ?></th>
                    <td><?= h($registration->gate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Parent Registration') ?></th>
                    <td><?= $registration->has('parent_registration') ? $this->Html->link($registration->parent_registration->id, ['controller' => 'Registrations', 'action' => 'view', $registration->parent_registration->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Mac') ?></th>
                    <td><?= h($registration->mac) ?></td>
                </tr>
                <tr>
                    <th><?= __('Typetest') ?></th>
                    <td><?= h($registration->typetest) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sample') ?></th>
                    <td><?= h($registration->sample) ?></td>
                </tr>
                <tr>
                    <th><?= __('Outcometest') ?></th>
                    <td><?= h($registration->outcometest) ?></td>
                </tr>
                <tr>
                    <th><?= __('Testdate') ?></th>
                    <td><?= h($registration->testdate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Oshremark') ?></th>
                    <td><?= h($registration->oshremark) ?></td>
                </tr>
                <tr>
                    <th><?= __('Remarks') ?></th>
                    <td><?= h($registration->remarks) ?></td>
                </tr>
                <tr>
                    <th><?= __('Working') ?></th>
                    <td><?= h($registration->working) ?></td>
                </tr>
                <tr>
                    <th><?= __('Qlastworkingdate') ?></th>
                    <td><?= h($registration->qlastworkingdate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Qpusstartdate') ?></th>
                    <td><?= h($registration->qpusstartdate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Qpusenddate') ?></th>
                    <td><?= h($registration->qpusenddate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Qstartdate') ?></th>
                    <td><?= h($registration->qstartdate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Qenddate') ?></th>
                    <td><?= h($registration->qenddate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Verified') ?></th>
                    <td><?= h($registration->verified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Confirmedcase') ?></th>
                    <td><?= h($registration->confirmedcase) ?></td>
                </tr>
                <tr>
                    <th><?= __('Relationship') ?></th>
                    <td><?= h($registration->relationship) ?></td>
                </tr>
                <tr>
                    <th><?= __('Patientcarelastdate') ?></th>
                    <td><?= h($registration->patientcarelastdate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($registration->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pui Box') ?></th>
                    <td><?= $registration->pui_box === null ? '' : $this->Number->format($registration->pui_box) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quarantine Box') ?></th>
                    <td><?= $registration->quarantine_box === null ? '' : $this->Number->format($registration->quarantine_box) ?></td>
                </tr>
                <tr>
                    <th><?= __('Registrationstat Id') ?></th>
                    <td><?= $registration->registrationstat_id === null ? '' : $this->Number->format($registration->registrationstat_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mysejahtera') ?></th>
                    <td><?= $registration->mysejahtera === null ? '' : $this->Number->format($registration->mysejahtera) ?></td>
                </tr>
                <tr>
                    <th><?= __('Typecontact') ?></th>
                    <td><?= $registration->typecontact === null ? '' : $this->Number->format($registration->typecontact) ?></td>
                </tr>
                <tr>
                    <th><?= __('Return Date') ?></th>
                    <td><?= h($registration->return_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($registration->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($registration->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vaccinated') ?></th>
                    <td><?= $registration->vaccinated ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Q1') ?></th>
                    <td><?= $registration->q1 ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Q2') ?></th>
                    <td><?= $registration->q2 ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Q3') ?></th>
                    <td><?= $registration->q3 ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Q4') ?></th>
                    <td><?= $registration->q4 ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Q5') ?></th>
                    <td><?= $registration->q5 ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Q6') ?></th>
                    <td><?= $registration->q6 ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Q7') ?></th>
                    <td><?= $registration->q7 ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Q8') ?></th>
                    <td><?= $registration->q8 ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Pui') ?></th>
                    <td><?= $registration->pui ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Housemate') ?></th>
                    <td><?= $registration->housemate ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Quarantine') ?></th>
                    <td><?= $registration->quarantine ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Selftest') ?></th>
                    <td><?= $registration->selftest ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Registrations') ?></h4>
                <?php if (!empty($registration->child_registrations)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Dateexposure') ?></th>
                            <th><?= __('Fullname') ?></th>
                            <th><?= __('Temp') ?></th>
                            <th><?= __('Ic') ?></th>
                            <th><?= __('Staffno') ?></th>
                            <th><?= __('Vaccinated Box') ?></th>
                            <th><?= __('Vaccinated') ?></th>
                            <th><?= __('Risklevel') ?></th>
                            <th><?= __('Source') ?></th>
                            <th><?= __('Department Id') ?></th>
                            <th><?= __('Category Id') ?></th>
                            <th><?= __('Registrationtype Id') ?></th>
                            <th><?= __('Return Date') ?></th>
                            <th><?= __('Q1') ?></th>
                            <th><?= __('Q2') ?></th>
                            <th><?= __('Event') ?></th>
                            <th><?= __('Date') ?></th>
                            <th><?= __('Cluster') ?></th>
                            <th><?= __('Q3') ?></th>
                            <th><?= __('Q4') ?></th>
                            <th><?= __('Q5') ?></th>
                            <th><?= __('Q6') ?></th>
                            <th><?= __('Q7') ?></th>
                            <th><?= __('Q8') ?></th>
                            <th><?= __('Pui') ?></th>
                            <th><?= __('Pui Box') ?></th>
                            <th><?= __('Housemate') ?></th>
                            <th><?= __('Quarantine') ?></th>
                            <th><?= __('Quarantine Box') ?></th>
                            <th><?= __('Symptomsbox') ?></th>
                            <th><?= __('Symptoms') ?></th>
                            <th><?= __('Reason Id') ?></th>
                            <th><?= __('Agree') ?></th>
                            <th><?= __('S1') ?></th>
                            <th><?= __('S2') ?></th>
                            <th><?= __('S3') ?></th>
                            <th><?= __('S4') ?></th>
                            <th><?= __('S5') ?></th>
                            <th><?= __('S6') ?></th>
                            <th><?= __('S7') ?></th>
                            <th><?= __('S8') ?></th>
                            <th><?= __('S9') ?></th>
                            <th><?= __('S10') ?></th>
                            <th><?= __('S11') ?></th>
                            <th><?= __('S12') ?></th>
                            <th><?= __('S13') ?></th>
                            <th><?= __('S14') ?></th>
                            <th><?= __('S15') ?></th>
                            <th><?= __('S16') ?></th>
                            <th><?= __('S17') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Gate') ?></th>
                            <th><?= __('Parent Id') ?></th>
                            <th><?= __('Mac') ?></th>
                            <th><?= __('Typetest') ?></th>
                            <th><?= __('Sample') ?></th>
                            <th><?= __('Selftest') ?></th>
                            <th><?= __('Outcometest') ?></th>
                            <th><?= __('Testdate') ?></th>
                            <th><?= __('Registrationstat Id') ?></th>
                            <th><?= __('Oshremark') ?></th>
                            <th><?= __('Remarks') ?></th>
                            <th><?= __('Working') ?></th>
                            <th><?= __('Qlastworkingdate') ?></th>
                            <th><?= __('Qpusstartdate') ?></th>
                            <th><?= __('Qpusenddate') ?></th>
                            <th><?= __('Qstartdate') ?></th>
                            <th><?= __('Qenddate') ?></th>
                            <th><?= __('Mysejahtera') ?></th>
                            <th><?= __('Typecontact') ?></th>
                            <th><?= __('Verified') ?></th>
                            <th><?= __('Confirmedcase') ?></th>
                            <th><?= __('Relationship') ?></th>
                            <th><?= __('Patientcarelastdate') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($registration->child_registrations as $childRegistrations) : ?>
                        <tr>
                            <td><?= h($childRegistrations->id) ?></td>
                            <td><?= h($childRegistrations->dateexposure) ?></td>
                            <td><?= h($childRegistrations->fullname) ?></td>
                            <td><?= h($childRegistrations->temp) ?></td>
                            <td><?= h($childRegistrations->ic) ?></td>
                            <td><?= h($childRegistrations->staffno) ?></td>
                            <td><?= h($childRegistrations->vaccinated_box) ?></td>
                            <td><?= h($childRegistrations->vaccinated) ?></td>
                            <td><?= h($childRegistrations->risklevel) ?></td>
                            <td><?= h($childRegistrations->source) ?></td>
                            <td><?= h($childRegistrations->department_id) ?></td>
                            <td><?= h($childRegistrations->category_id) ?></td>
                            <td><?= h($childRegistrations->registrationtype_id) ?></td>
                            <td><?= h($childRegistrations->return_date) ?></td>
                            <td><?= h($childRegistrations->q1) ?></td>
                            <td><?= h($childRegistrations->q2) ?></td>
                            <td><?= h($childRegistrations->event) ?></td>
                            <td><?= h($childRegistrations->date) ?></td>
                            <td><?= h($childRegistrations->cluster) ?></td>
                            <td><?= h($childRegistrations->q3) ?></td>
                            <td><?= h($childRegistrations->q4) ?></td>
                            <td><?= h($childRegistrations->q5) ?></td>
                            <td><?= h($childRegistrations->q6) ?></td>
                            <td><?= h($childRegistrations->q7) ?></td>
                            <td><?= h($childRegistrations->q8) ?></td>
                            <td><?= h($childRegistrations->pui) ?></td>
                            <td><?= h($childRegistrations->pui_box) ?></td>
                            <td><?= h($childRegistrations->housemate) ?></td>
                            <td><?= h($childRegistrations->quarantine) ?></td>
                            <td><?= h($childRegistrations->quarantine_box) ?></td>
                            <td><?= h($childRegistrations->symptomsbox) ?></td>
                            <td><?= h($childRegistrations->symptoms) ?></td>
                            <td><?= h($childRegistrations->reason_id) ?></td>
                            <td><?= h($childRegistrations->agree) ?></td>
                            <td><?= h($childRegistrations->s1) ?></td>
                            <td><?= h($childRegistrations->s2) ?></td>
                            <td><?= h($childRegistrations->s3) ?></td>
                            <td><?= h($childRegistrations->s4) ?></td>
                            <td><?= h($childRegistrations->s5) ?></td>
                            <td><?= h($childRegistrations->s6) ?></td>
                            <td><?= h($childRegistrations->s7) ?></td>
                            <td><?= h($childRegistrations->s8) ?></td>
                            <td><?= h($childRegistrations->s9) ?></td>
                            <td><?= h($childRegistrations->s10) ?></td>
                            <td><?= h($childRegistrations->s11) ?></td>
                            <td><?= h($childRegistrations->s12) ?></td>
                            <td><?= h($childRegistrations->s13) ?></td>
                            <td><?= h($childRegistrations->s14) ?></td>
                            <td><?= h($childRegistrations->s15) ?></td>
                            <td><?= h($childRegistrations->s16) ?></td>
                            <td><?= h($childRegistrations->s17) ?></td>
                            <td><?= h($childRegistrations->created) ?></td>
                            <td><?= h($childRegistrations->modified) ?></td>
                            <td><?= h($childRegistrations->gate) ?></td>
                            <td><?= h($childRegistrations->parent_id) ?></td>
                            <td><?= h($childRegistrations->mac) ?></td>
                            <td><?= h($childRegistrations->typetest) ?></td>
                            <td><?= h($childRegistrations->sample) ?></td>
                            <td><?= h($childRegistrations->selftest) ?></td>
                            <td><?= h($childRegistrations->outcometest) ?></td>
                            <td><?= h($childRegistrations->testdate) ?></td>
                            <td><?= h($childRegistrations->registrationstat_id) ?></td>
                            <td><?= h($childRegistrations->oshremark) ?></td>
                            <td><?= h($childRegistrations->remarks) ?></td>
                            <td><?= h($childRegistrations->working) ?></td>
                            <td><?= h($childRegistrations->qlastworkingdate) ?></td>
                            <td><?= h($childRegistrations->qpusstartdate) ?></td>
                            <td><?= h($childRegistrations->qpusenddate) ?></td>
                            <td><?= h($childRegistrations->qstartdate) ?></td>
                            <td><?= h($childRegistrations->qenddate) ?></td>
                            <td><?= h($childRegistrations->mysejahtera) ?></td>
                            <td><?= h($childRegistrations->typecontact) ?></td>
                            <td><?= h($childRegistrations->verified) ?></td>
                            <td><?= h($childRegistrations->confirmedcase) ?></td>
                            <td><?= h($childRegistrations->relationship) ?></td>
                            <td><?= h($childRegistrations->patientcarelastdate) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Registrations', 'action' => 'view', $childRegistrations->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Registrations', 'action' => 'edit', $childRegistrations->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Registrations', 'action' => 'delete', $childRegistrations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childRegistrations->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Remarks') ?></h4>
                <?php if (!empty($registration->remarks)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Remark') ?></th>
                            <th><?= __('Registration Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($registration->remarks as $remarks) : ?>
                        <tr>
                            <td><?= h($remarks->id) ?></td>
                            <td><?= h($remarks->remark) ?></td>
                            <td><?= h($remarks->registration_id) ?></td>
                            <td><?= h($remarks->created) ?></td>
                            <td><?= h($remarks->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Remarks', 'action' => 'view', $remarks->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Remarks', 'action' => 'edit', $remarks->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Remarks', 'action' => 'delete', $remarks->id], ['confirm' => __('Are you sure you want to delete # {0}?', $remarks->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
