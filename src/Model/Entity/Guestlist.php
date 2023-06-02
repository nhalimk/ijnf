<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Guestlist Entity
 *
 * @property int $id
 * @property string|null $fullname
 * @property string|null $table
 * @property string|null $company
 * @property string|null $designation
 * @property int|null $mobilenumber
 * @property string|null $emailaddress
 * @property string|null $remark
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 */
class Guestlist extends Entity
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
        'table' => true,
        'company' => true,
        'designation' => true,
        'mobilenumber' => true,
        'emailaddress' => true,
        'remark' => true,
        'created' => true,
        'modified' => true,
    ];
}
