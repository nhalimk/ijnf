<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Agm Entity
 *
 * @property int $id
 * @property string|null $staffno
 * @property string|null $fullname
 * @property string|null $department
 * @property string|null $tableno
 * @property string|null $gate
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $updated
 */
class Agm extends Entity
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
        'staffno' => true,
        'fullname' => true,
        'department' => true,
        'tableno' => true,
        'gate' => true,
        'created' => true,
        'updated' => true,
    ];
}
