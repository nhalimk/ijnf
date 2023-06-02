<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Surveys Model
 *
 * @method \App\Model\Entity\Survey newEmptyEntity()
 * @method \App\Model\Entity\Survey newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Survey[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Survey get($primaryKey, $options = [])
 * @method \App\Model\Entity\Survey findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Survey patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Survey[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Survey|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Survey saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Survey[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Survey[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Survey[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Survey[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SurveysTable extends Table
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

        $this->setTable('surveys');
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
            ->scalar('fullname')
            ->maxLength('fullname', 255)
            ->allowEmptyString('fullname');

        $validator
            ->scalar('phone')
            ->maxLength('phone', 255)
            ->allowEmptyString('phone');

        $validator
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->scalar('q1')
            ->maxLength('q1', 255)
            ->allowEmptyString('q1');

        $validator
            ->scalar('q2')
            ->maxLength('q2', 255)
            ->allowEmptyString('q2');

        $validator
            ->scalar('remark')
            ->maxLength('remark', 255)
            ->allowEmptyString('remark');

        return $validator;
    }
}
