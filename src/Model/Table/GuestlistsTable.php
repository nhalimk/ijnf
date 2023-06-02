<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Guestlists Model
 *
 * @method \App\Model\Entity\Guestlist newEmptyEntity()
 * @method \App\Model\Entity\Guestlist newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Guestlist[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Guestlist get($primaryKey, $options = [])
 * @method \App\Model\Entity\Guestlist findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Guestlist patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Guestlist[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Guestlist|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Guestlist saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Guestlist[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Guestlist[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Guestlist[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Guestlist[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class GuestlistsTable extends Table
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

        $this->setTable('guestlists');
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
            ->scalar('table')
            ->maxLength('table', 255)
            ->allowEmptyString('table');

        $validator
            ->scalar('company')
            ->maxLength('company', 255)
            ->allowEmptyString('company');

        $validator
            ->scalar('designation')
            ->maxLength('designation', 255)
            ->allowEmptyString('designation');

        $validator
            ->integer('mobilenumber')
            ->allowEmptyString('mobilenumber');

        $validator
            ->scalar('emailaddress')
            ->maxLength('emailaddress', 255)
            ->allowEmptyString('emailaddress');

        $validator
            ->scalar('remark')
            ->maxLength('remark', 255)
            ->allowEmptyString('remark');

        return $validator;
    }
}
