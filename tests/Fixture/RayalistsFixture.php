<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RayalistsFixture
 */
class RayalistsFixture extends TestFixture
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
                'staffno' => 'Lorem ipsum dolor sit amet',
                'fullname' => 'Lorem ipsum dolor sit amet',
                'department' => 'Lorem ipsum dolor sit amet',
                'tableno' => 'Lorem ipsum dolor sit amet',
                'gate' => 'Lorem ipsum dolor sit amet',
                'created' => 1683083564,
                'updated' => 1683083564,
            ],
        ];
        parent::init();
    }
}
