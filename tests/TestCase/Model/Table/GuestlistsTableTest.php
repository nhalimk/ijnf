<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GuestlistsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GuestlistsTable Test Case
 */
class GuestlistsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\GuestlistsTable
     */
    protected $Guestlists;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Guestlists',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Guestlists') ? [] : ['className' => GuestlistsTable::class];
        $this->Guestlists = $this->getTableLocator()->get('Guestlists', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Guestlists);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\GuestlistsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
