<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SurveysFixture
 */
class SurveysFixture extends TestFixture
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
                'fullname' => 'Lorem ipsum dolor sit amet',
                'phone' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'q1' => 'Lorem ipsum dolor sit amet',
                'q2' => 'Lorem ipsum dolor sit amet',
                'remark' => 'Lorem ipsum dolor sit amet',
                'created' => 1685666514,
                'modified' => 1685666514,
            ],
        ];
        parent::init();
    }
}
