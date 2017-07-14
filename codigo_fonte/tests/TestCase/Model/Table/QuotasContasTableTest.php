<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\QuotasContasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\QuotasContasTable Test Case
 */
class QuotasContasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\QuotasContasTable
     */
    public $QuotasContas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.quotas_contas',
        'app.contas',
        'app.mesas',
        'app.agregacoes',
        'app.pedidos',
        'app.items_pedidos',
        'app.cardapios',
        'app.pedidos_cardapios',
        'app.reservas',
        'app.clientes',
        'app.mesas_reservas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('QuotasContas') ? [] : ['className' => QuotasContasTable::class];
        $this->QuotasContas = TableRegistry::get('QuotasContas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->QuotasContas);

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