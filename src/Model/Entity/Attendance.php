<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Attendance Entity
 *
 * @property int $id
 * @property string|null $fullname
 * @property string|null $company
 * @property string|null $phone
 * @property string|null $email
 * @property string|null $remark
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 */
class Attendance extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'fullname' => true,
        'company' => true,
        'phone' => true,
        'email' => true,
        'remark' => true,
        'created' => true,
        'modified' => true,
    ];
}
