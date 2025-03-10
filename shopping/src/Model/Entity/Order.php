<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Order Entity
 *
 * @property int $id
 * @property int $user_id
 * @property string $total_price
 * @property string|null $status
 * @property \Cake\I18n\DateTime|null $created_at
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\OrderItem[] $order_items
 */
class Order extends Entity
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
        'user_id' => true,
        'total_price' => true,
        'status' => true,
        'created_at' => true,
        'user' => true,
        'order_items' => true,
    ];
}
