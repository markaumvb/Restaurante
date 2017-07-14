<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pedidos Model
 *
 * @property \App\Model\Table\MesasTable|\Cake\ORM\Association\BelongsTo $Mesas
 * @property \App\Model\Table\ItemsPedidosTable|\Cake\ORM\Association\HasMany $ItemsPedidos
 * @property \App\Model\Table\CardapiosTable|\Cake\ORM\Association\BelongsToMany $Cardapios
 *
 * @method \App\Model\Entity\Pedido get($primaryKey, $options = [])
 * @method \App\Model\Entity\Pedido newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Pedido[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pedido|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pedido patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Pedido[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pedido findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PedidosTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('pedidos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Mesas', [
            'foreignKey' => 'mesa_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('ItemsPedidos', [
            'foreignKey' => 'pedido_id'
        ]);
        $this->belongsToMany('Cardapios', [
            'foreignKey' => 'pedido_id',
            'targetForeignKey' => 'cardapio_id',
            'joinTable' => 'pedidos_cardapios'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->dateTime('datahora')
            ->requirePresence('datahora', 'create')
            ->notEmpty('datahora');

        $validator
            ->numeric('valortotal')
            ->requirePresence('valortotal', 'create')
            ->notEmpty('valortotal');

        $validator
            ->requirePresence('entrega', 'create')
            ->notEmpty('entrega');

        $validator
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['mesa_id'], 'Mesas'));

        return $rules;
    }
}
