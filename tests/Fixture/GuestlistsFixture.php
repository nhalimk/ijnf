<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * GuestlistsFixture
 */
class GuestlistsFixture extends TestFixture
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
                'table' => 'Lorem ipsum dolor sit amet',
                'company' => 'Lorem ipsum dolor sit amet',
                'designation' => 'Lorem ipsum dolor sit amet',
                'mobilenumber' => 1,
                'emailaddress' => 'Lorem ipsum dolor sit amet',
                'remark' => 'Lorem ipsum dolor sit amet',
                'created' => 1685666508,
                'modified' => 1685666508,
            ],
        ];
        parent::init();
    }
}
