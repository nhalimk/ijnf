<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Survey Entity
 *
 * @property int $id
 * @property string|null $fullname
 * @property string|null $phone
 * @property string|null $email
 * @property string|null $q1
 * @property string|null $q2
 * @property string|null $remark
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 */
class Survey extends Entity
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
        'phone' => true,
        'email' => true,
        'q1' => true,
        'q2' => true,
        'remark' => true,
        'created' => true,
        'modified' => true,
    ];
}
