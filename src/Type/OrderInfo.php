<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type OrderInfo
 *
 * @link https://core.telegram.org/bots/api#orderinfo
 *
 * This object represents information about an order.
 */
class OrderInfo extends Type {
    /**
     * @var string|null Optional. User name
     */
    public string|null $name;

    /**
     * @var string|null Optional. User's phone number
     */
    public string|null $phoneNumber;

    /**
     * @var string|null Optional. User email
     */
    public string|null $email;

    /**
     * @var ShippingAddress|null Optional. User shipping address
     */
    public ShippingAddress|null $shippingAddress;
}
