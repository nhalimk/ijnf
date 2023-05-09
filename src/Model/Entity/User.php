<?php
declare(strict_types=1);

namespace App\Model\Entity;
use Cake\Auth\DefaultPasswordHasher; // Add this line


use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string|null $username
 * @property string|null $email
 * @property string|null $password
 * @property int|null $department_id
 * @property string|null $role
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Department $department
 */
class User extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'username' => true,
        'email' => true,
        'password' => true,
        'department' => true,
        'department_id' => true,
        'role' => true,
        'fullname' => true,
        'created' => true,
        'modified' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
    ];
    
    protected function _setPassword($value)
    {
        if (strlen($value)) {
            $hasher = new DefaultPasswordHasher();
 
            return $hasher->hash($value);
        }
    }
}
