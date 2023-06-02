<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Registration Entity
 *
 * @property int $id
 * @property string|null $dateexposure
 * @property string $fullname
 * @property string|null $temp
 * @property string|null $ic
 * @property string $staffno
 * @property string|null $vaccinated_box
 * @property bool|null $vaccinated
 * @property string|null $risklevel
 * @property string|null $source
 * @property int|null $department_id
 * @property int|null $category_id
 * @property int|null $registrationtype_id
 * @property \Cake\I18n\FrozenDate|null $return_date
 * @property bool|null $q1
 * @property bool|null $q2
 * @property string|null $event
 * @property string|null $date
 * @property string|null $cluster
 * @property bool|null $q3
 * @property bool|null $q4
 * @property bool|null $q5
 * @property bool|null $q6
 * @property bool|null $q7
 * @property bool|null $q8
 * @property bool|null $pui
 * @property int|null $pui_box
 * @property bool|null $housemate
 * @property bool|null $quarantine
 * @property int|null $quarantine_box
 * @property string|null $symptomsbox
 * @property string|null $symptoms
 * @property int|null $reason_id
 * @property string|null $agree
 * @property string|null $s1
 * @property string|null $s2
 * @property string|null $s3
 * @property string|null $s4
 * @property string|null $s5
 * @property string|null $s6
 * @property string|null $s7
 * @property string|null $s8
 * @property string|null $s9
 * @property string|null $s10
 * @property string|null $s11
 * @property string|null $s12
 * @property string|null $s13
 * @property string|null $s14
 * @property string|null $s15
 * @property string|null $s16
 * @property string|null $s17
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property string|null $gate
 * @property int|null $parent_id
 * @property string|null $mac
 * @property string|null $typetest
 * @property string|null $sample
 * @property bool|null $selftest
 * @property string|null $outcometest
 * @property string|null $testdate
 * @property int|null $registrationstat_id
 * @property string|null $oshremark
 * @property string|null $working
 * @property string|null $qlastworkingdate
 * @property string|null $qpusstartdate
 * @property string|null $qpusenddate
 * @property string|null $qstartdate
 * @property string|null $qenddate
 * @property int|null $mysejahtera
 * @property int|null $typecontact
 * @property string|null $verified
 * @property string|null $confirmedcase
 * @property string|null $relationship
 * @property string|null $patientcarelastdate
 *
 * @property \App\Model\Entity\Remark[] $remarks
 * @property \App\Model\Entity\Department $department
 * @property \App\Model\Entity\Category $category
 * @property \App\Model\Entity\Registrationtype $registrationtype
 * @property \App\Model\Entity\Reason $reason
 * @property \App\Model\Entity\ParentRegistration $parent_registration
 * @property \App\Model\Entity\ChildRegistration[] $child_registrations
 */
class Registration extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'dateexposure' => true,
        'fullname' => true,
        'temp' => true,
        'ic' => true,
        'staffno' => true,
        'vaccinated_box' => true,
        'vaccinated' => true,
        'risklevel' => true,
        'source' => true,
        'department_id' => true,
        'category_id' => true,
        'registrationtype_id' => true,
        'return_date' => true,
        'q1' => true,
        'q2' => true,
        'event' => true,
        'date' => true,
        'cluster' => true,
        'q3' => true,
        'q4' => true,
        'q5' => true,
        'q6' => true,
        'q7' => true,
        'q8' => true,
        'pui' => true,
        'pui_box' => true,
        'housemate' => true,
        'quarantine' => true,
        'quarantine_box' => true,
        'symptomsbox' => true,
        'symptoms' => true,
        'reason_id' => true,
        'agree' => true,
        's1' => true,
        's2' => true,
        's3' => true,
        's4' => true,
        's5' => true,
        's6' => true,
        's7' => true,
        's8' => true,
        's9' => true,
        's10' => true,
        's11' => true,
        's12' => true,
        's13' => true,
        's14' => true,
        's15' => true,
        's16' => true,
        's17' => true,
        'created' => true,
        'modified' => true,
        'gate' => true,
        'parent_id' => true,
        'mac' => true,
        'typetest' => true,
        'sample' => true,
        'selftest' => true,
        'outcometest' => true,
        'testdate' => true,
        'registrationstat_id' => true,
        'oshremark' => true,
        'remarks' => true,
        'working' => true,
        'qlastworkingdate' => true,
        'qpusstartdate' => true,
        'qpusenddate' => true,
        'qstartdate' => true,
        'qenddate' => true,
        'mysejahtera' => true,
        'typecontact' => true,
        'verified' => true,
        'confirmedcase' => true,
        'relationship' => true,
        'patientcarelastdate' => true,
        'department' => true,
        'category' => true,
        'registrationtype' => true,
        'reason' => true,
        'parent_registration' => true,
        'child_registrations' => true,
    ];
}
