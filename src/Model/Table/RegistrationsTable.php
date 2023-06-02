<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Registrations Model
 *
 * @property \App\Model\Table\DepartmentsTable&\Cake\ORM\Association\BelongsTo $Departments
 * @property \App\Model\Table\CategoriesTable&\Cake\ORM\Association\BelongsTo $Categories
 * @property \App\Model\Table\RegistrationtypesTable&\Cake\ORM\Association\BelongsTo $Registrationtypes
 * @property \App\Model\Table\ReasonsTable&\Cake\ORM\Association\BelongsTo $Reasons
 * @property \App\Model\Table\RegistrationsTable&\Cake\ORM\Association\BelongsTo $ParentRegistrations
 * @property \App\Model\Table\RegistrationsTable&\Cake\ORM\Association\HasMany $ChildRegistrations
 * @property \App\Model\Table\RemarksTable&\Cake\ORM\Association\HasMany $Remarks
 *
 * @method \App\Model\Entity\Registration newEmptyEntity()
 * @method \App\Model\Entity\Registration newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Registration[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Registration get($primaryKey, $options = [])
 * @method \App\Model\Entity\Registration findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Registration patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Registration[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Registration|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Registration saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Registration[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Registration[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Registration[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Registration[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RegistrationsTable extends Table
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

        $this->setTable('registrations');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Departments', [
            'foreignKey' => 'department_id',
        ]);
        $this->belongsTo('Categories', [
            'foreignKey' => 'category_id',
        ]);
        $this->belongsTo('Registrationtypes', [
            'foreignKey' => 'registrationtype_id',
        ]);
        $this->belongsTo('Reasons', [
            'foreignKey' => 'reason_id',
        ]);
        $this->belongsTo('ParentRegistrations', [
            'className' => 'Registrations',
            'foreignKey' => 'parent_id',
        ]);
        $this->hasMany('ChildRegistrations', [
            'className' => 'Registrations',
            'foreignKey' => 'parent_id',
        ]);
        $this->hasMany('Remarks', [
            'foreignKey' => 'registration_id',
        ]);
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
            ->scalar('dateexposure')
            ->maxLength('dateexposure', 255)
            ->allowEmptyString('dateexposure');

        $validator
            ->scalar('fullname')
            ->maxLength('fullname', 255)
            ->requirePresence('fullname', 'create')
            ->notEmptyString('fullname');

        $validator
            ->scalar('temp')
            ->maxLength('temp', 255)
            ->allowEmptyString('temp');

        $validator
            ->scalar('ic')
            ->maxLength('ic', 255)
            ->allowEmptyString('ic');

        $validator
            ->scalar('staffno')
            ->maxLength('staffno', 255)
            ->requirePresence('staffno', 'create')
            ->notEmptyString('staffno');

        $validator
            ->scalar('vaccinated_box')
            ->maxLength('vaccinated_box', 255)
            ->allowEmptyString('vaccinated_box');

        $validator
            ->boolean('vaccinated')
            ->allowEmptyString('vaccinated');

        $validator
            ->scalar('risklevel')
            ->maxLength('risklevel', 255)
            ->allowEmptyString('risklevel');

        $validator
            ->scalar('source')
            ->maxLength('source', 255)
            ->allowEmptyString('source');

        $validator
            ->integer('department_id')
            ->allowEmptyString('department_id');

        $validator
            ->integer('category_id')
            ->allowEmptyString('category_id');

        $validator
            ->integer('registrationtype_id')
            ->allowEmptyString('registrationtype_id');

        $validator
            ->date('return_date')
            ->allowEmptyDate('return_date');

        $validator
            ->boolean('q1')
            ->allowEmptyString('q1');

        $validator
            ->boolean('q2')
            ->allowEmptyString('q2');

        $validator
            ->scalar('event')
            ->maxLength('event', 255)
            ->allowEmptyString('event');

        $validator
            ->scalar('date')
            ->maxLength('date', 255)
            ->allowEmptyString('date');

        $validator
            ->scalar('cluster')
            ->maxLength('cluster', 255)
            ->allowEmptyString('cluster');

        $validator
            ->boolean('q3')
            ->allowEmptyString('q3');

        $validator
            ->boolean('q4')
            ->allowEmptyString('q4');

        $validator
            ->boolean('q5')
            ->allowEmptyString('q5');

        $validator
            ->boolean('q6')
            ->allowEmptyString('q6');

        $validator
            ->boolean('q7')
            ->allowEmptyString('q7');

        $validator
            ->boolean('q8')
            ->allowEmptyString('q8');

        $validator
            ->boolean('pui')
            ->allowEmptyString('pui');

        $validator
            ->allowEmptyString('pui_box');

        $validator
            ->boolean('housemate')
            ->allowEmptyString('housemate');

        $validator
            ->boolean('quarantine')
            ->allowEmptyString('quarantine');

        $validator
            ->allowEmptyString('quarantine_box');

        $validator
            ->scalar('symptomsbox')
            ->maxLength('symptomsbox', 255)
            ->allowEmptyString('symptomsbox');

        $validator
            ->scalar('symptoms')
            ->maxLength('symptoms', 255)
            ->allowEmptyString('symptoms');

        $validator
            ->integer('reason_id')
            ->allowEmptyString('reason_id');

        $validator
            ->scalar('agree')
            ->maxLength('agree', 255)
            ->allowEmptyString('agree');

        $validator
            ->scalar('s1')
            ->maxLength('s1', 255)
            ->allowEmptyString('s1');

        $validator
            ->scalar('s2')
            ->maxLength('s2', 255)
            ->allowEmptyString('s2');

        $validator
            ->scalar('s3')
            ->maxLength('s3', 255)
            ->allowEmptyString('s3');

        $validator
            ->scalar('s4')
            ->maxLength('s4', 255)
            ->allowEmptyString('s4');

        $validator
            ->scalar('s5')
            ->maxLength('s5', 255)
            ->allowEmptyString('s5');

        $validator
            ->scalar('s6')
            ->maxLength('s6', 255)
            ->allowEmptyString('s6');

        $validator
            ->scalar('s7')
            ->maxLength('s7', 255)
            ->allowEmptyString('s7');

        $validator
            ->scalar('s8')
            ->maxLength('s8', 255)
            ->allowEmptyString('s8');

        $validator
            ->scalar('s9')
            ->maxLength('s9', 255)
            ->allowEmptyString('s9');

        $validator
            ->scalar('s10')
            ->maxLength('s10', 255)
            ->allowEmptyString('s10');

        $validator
            ->scalar('s11')
            ->maxLength('s11', 255)
            ->allowEmptyString('s11');

        $validator
            ->scalar('s12')
            ->maxLength('s12', 255)
            ->allowEmptyString('s12');

        $validator
            ->scalar('s13')
            ->maxLength('s13', 255)
            ->allowEmptyString('s13');

        $validator
            ->scalar('s14')
            ->maxLength('s14', 255)
            ->allowEmptyString('s14');

        $validator
            ->scalar('s15')
            ->maxLength('s15', 255)
            ->allowEmptyString('s15');

        $validator
            ->scalar('s16')
            ->maxLength('s16', 255)
            ->allowEmptyString('s16');

        $validator
            ->scalar('s17')
            ->maxLength('s17', 255)
            ->allowEmptyString('s17');

        $validator
            ->scalar('gate')
            ->maxLength('gate', 255)
            ->allowEmptyString('gate');

        $validator
            ->integer('parent_id')
            ->allowEmptyString('parent_id');

        $validator
            ->scalar('mac')
            ->maxLength('mac', 255)
            ->allowEmptyString('mac');

        $validator
            ->scalar('typetest')
            ->maxLength('typetest', 255)
            ->allowEmptyString('typetest');

        $validator
            ->scalar('sample')
            ->maxLength('sample', 255)
            ->allowEmptyString('sample');

        $validator
            ->boolean('selftest')
            ->allowEmptyString('selftest');

        $validator
            ->scalar('outcometest')
            ->maxLength('outcometest', 255)
            ->allowEmptyString('outcometest');

        $validator
            ->scalar('testdate')
            ->maxLength('testdate', 255)
            ->allowEmptyString('testdate');

        $validator
            ->integer('registrationstat_id')
            ->allowEmptyString('registrationstat_id');

        $validator
            ->scalar('oshremark')
            ->maxLength('oshremark', 255)
            ->allowEmptyString('oshremark');

        $validator
            ->scalar('remarks')
            ->maxLength('remarks', 255)
            ->allowEmptyString('remarks');

        $validator
            ->scalar('working')
            ->maxLength('working', 255)
            ->allowEmptyString('working');

        $validator
            ->scalar('qlastworkingdate')
            ->maxLength('qlastworkingdate', 255)
            ->allowEmptyString('qlastworkingdate');

        $validator
            ->scalar('qpusstartdate')
            ->maxLength('qpusstartdate', 255)
            ->allowEmptyString('qpusstartdate');

        $validator
            ->scalar('qpusenddate')
            ->maxLength('qpusenddate', 255)
            ->allowEmptyString('qpusenddate');

        $validator
            ->scalar('qstartdate')
            ->maxLength('qstartdate', 255)
            ->allowEmptyString('qstartdate');

        $validator
            ->scalar('qenddate')
            ->maxLength('qenddate', 255)
            ->allowEmptyString('qenddate');

        $validator
            ->integer('mysejahtera')
            ->allowEmptyString('mysejahtera');

        $validator
            ->integer('typecontact')
            ->allowEmptyString('typecontact');

        $validator
            ->scalar('verified')
            ->maxLength('verified', 255)
            ->allowEmptyString('verified');

        $validator
            ->scalar('confirmedcase')
            ->maxLength('confirmedcase', 255)
            ->allowEmptyString('confirmedcase');

        $validator
            ->scalar('relationship')
            ->maxLength('relationship', 255)
            ->allowEmptyString('relationship');

        $validator
            ->scalar('patientcarelastdate')
            ->maxLength('patientcarelastdate', 255)
            ->allowEmptyString('patientcarelastdate');

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
        $rules->add($rules->existsIn('department_id', 'Departments'), ['errorField' => 'department_id']);
        $rules->add($rules->existsIn('category_id', 'Categories'), ['errorField' => 'category_id']);
        $rules->add($rules->existsIn('registrationtype_id', 'Registrationtypes'), ['errorField' => 'registrationtype_id']);
        $rules->add($rules->existsIn('reason_id', 'Reasons'), ['errorField' => 'reason_id']);
        $rules->add($rules->existsIn('parent_id', 'ParentRegistrations'), ['errorField' => 'parent_id']);

        return $rules;
    }
}
