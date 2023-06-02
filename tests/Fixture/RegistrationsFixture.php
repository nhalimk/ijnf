<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RegistrationsFixture
 */
class RegistrationsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'dateexposure' => 'Lorem ipsum dolor sit amet',
                'fullname' => 'Lorem ipsum dolor sit amet',
                'temp' => 'Lorem ipsum dolor sit amet',
                'ic' => 'Lorem ipsum dolor sit amet',
                'staffno' => 'Lorem ipsum dolor sit amet',
                'vaccinated_box' => 'Lorem ipsum dolor sit amet',
                'vaccinated' => 1,
                'risklevel' => 'Lorem ipsum dolor sit amet',
                'source' => 'Lorem ipsum dolor sit amet',
                'department_id' => 1,
                'category_id' => 1,
                'registrationtype_id' => 1,
                'return_date' => '2023-06-02',
                'q1' => 1,
                'q2' => 1,
                'event' => 'Lorem ipsum dolor sit amet',
                'date' => 'Lorem ipsum dolor sit amet',
                'cluster' => 'Lorem ipsum dolor sit amet',
                'q3' => 1,
                'q4' => 1,
                'q5' => 1,
                'q6' => 1,
                'q7' => 1,
                'q8' => 1,
                'pui' => 1,
                'pui_box' => 1,
                'housemate' => 1,
                'quarantine' => 1,
                'quarantine_box' => 1,
                'symptomsbox' => 'Lorem ipsum dolor sit amet',
                'symptoms' => 'Lorem ipsum dolor sit amet',
                'reason_id' => 1,
                'agree' => 'Lorem ipsum dolor sit amet',
                's1' => 'Lorem ipsum dolor sit amet',
                's2' => 'Lorem ipsum dolor sit amet',
                's3' => 'Lorem ipsum dolor sit amet',
                's4' => 'Lorem ipsum dolor sit amet',
                's5' => 'Lorem ipsum dolor sit amet',
                's6' => 'Lorem ipsum dolor sit amet',
                's7' => 'Lorem ipsum dolor sit amet',
                's8' => 'Lorem ipsum dolor sit amet',
                's9' => 'Lorem ipsum dolor sit amet',
                's10' => 'Lorem ipsum dolor sit amet',
                's11' => 'Lorem ipsum dolor sit amet',
                's12' => 'Lorem ipsum dolor sit amet',
                's13' => 'Lorem ipsum dolor sit amet',
                's14' => 'Lorem ipsum dolor sit amet',
                's15' => 'Lorem ipsum dolor sit amet',
                's16' => 'Lorem ipsum dolor sit amet',
                's17' => 'Lorem ipsum dolor sit amet',
                'created' => 1685666331,
                'modified' => 1685666331,
                'gate' => 'Lorem ipsum dolor sit amet',
                'parent_id' => 1,
                'mac' => 'Lorem ipsum dolor sit amet',
                'typetest' => 'Lorem ipsum dolor sit amet',
                'sample' => 'Lorem ipsum dolor sit amet',
                'selftest' => 1,
                'outcometest' => 'Lorem ipsum dolor sit amet',
                'testdate' => 'Lorem ipsum dolor sit amet',
                'registrationstat_id' => 1,
                'oshremark' => 'Lorem ipsum dolor sit amet',
                'remarks' => 'Lorem ipsum dolor sit amet',
                'working' => 'Lorem ipsum dolor sit amet',
                'qlastworkingdate' => 'Lorem ipsum dolor sit amet',
                'qpusstartdate' => 'Lorem ipsum dolor sit amet',
                'qpusenddate' => 'Lorem ipsum dolor sit amet',
                'qstartdate' => 'Lorem ipsum dolor sit amet',
                'qenddate' => 'Lorem ipsum dolor sit amet',
                'mysejahtera' => 1,
                'typecontact' => 1,
                'verified' => 'Lorem ipsum dolor sit amet',
                'confirmedcase' => 'Lorem ipsum dolor sit amet',
                'relationship' => 'Lorem ipsum dolor sit amet',
                'patientcarelastdate' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
