<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Authentication\PasswordHasher\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $type
 * @property string $username
 * @property string $password
 * @property string $token
 * @property \Cake\I18n\FrozenTime $createtime
 * @property \Cake\I18n\FrozenTime $modifiedate
 *
 * @property \App\Model\Entity\Farmer[] $farmer
 * @property \App\Model\Entity\Manufacture[] $manufactures
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
        'type' => true,
        'username' => true,
        'password' => true,
        'token' => true,
        'createtime' => true,
        'modifiedate' => true,
        'farmer' => true,
        'manufactures' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
    ];

    // Add this method
    protected function _setPassword(string $password)
    {
        if (strlen($password) > 0) {
            return (new DefaultPasswordHasher())->hash($password);
        }
    }
}
