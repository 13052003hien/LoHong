<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $username
 * @property string $password_hash
 * @property string $email
 * @property string|null $phone
 * @property string|null $role
 * @property \Cake\I18n\DateTime|null $created_at
 *
 * @property \App\Model\Entity\Order[] $orders
 * @property \App\Model\Entity\Review[] $reviews
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
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'username' => true,
        'password_hash' => true,
        'email' => true,
        'phone' => true,
        'role' => true,
        'created_at' => true,
        'orders' => true,
        'reviews' => true,
    ];
}
