<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RayalistsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RayalistsTable Test Case
 */
class RayalistsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RayalistsTable
     */
    protected $Rayalists;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Rayalists',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Rayalists') ? [] : ['className' => RayalistsTable::class];
        $this->Rayalists = $this->getTableLocator()->get('Rayalists', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Rayalists);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\RayalistsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
