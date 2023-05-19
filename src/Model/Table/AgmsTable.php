<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Agms Model
 *
 * @method \App\Model\Entity\Agm newEmptyEntity()
 * @method \App\Model\Entity\Agm newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Agm[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Agm get($primaryKey, $options = [])
 * @method \App\Model\Entity\Agm findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Agm patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Agm[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Agm|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Agm saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Agm[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Agm[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Agm[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Agm[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AgmsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('agms');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('staffno')
            ->maxLength('staffno', 255)
            ->allowEmptyString('staffno')
            ->add('staffno', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('fullname')
            ->maxLength('fullname', 255)
            ->allowEmptyString('fullname');

        $validator
            ->scalar('department')
            ->maxLength('department', 255)
            ->allowEmptyString('department');

        $validator
            ->scalar('tableno')
            ->maxLength('tableno', 255)
            ->allowEmptyString('tableno');

        $validator
            ->scalar('gate')
            ->maxLength('gate', 255)
            ->allowEmptyString('gate');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->isUnique(['staffno'], ['allowMultipleNulls' => true]), ['errorField' => 'staffno']);

        return $rules;
    }
}
