<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Rayalists Model
 *
 * @method \App\Model\Entity\Rayalist newEmptyEntity()
 * @method \App\Model\Entity\Rayalist newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Rayalist[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Rayalist get($primaryKey, $options = [])
 * @method \App\Model\Entity\Rayalist findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Rayalist patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Rayalist[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Rayalist|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Rayalist saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Rayalist[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Rayalist[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Rayalist[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Rayalist[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RayalistsTable extends Table
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

        $this->setTable('rayalists');
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
            ->allowEmptyString('staffno');

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
}
