<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ItensCardapiosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ItensCardapiosTable Test Case
 */
class ItensCardapiosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ItensCardapiosTable
     */
    public $ItensCardapios;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.itens_cardapios'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ItensCardapios') ? [] : ['className' => ItensCardapiosTable::class];
        $this->ItensCardapios = TableRegistry::get('ItensCardapios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ItensCardapios);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
