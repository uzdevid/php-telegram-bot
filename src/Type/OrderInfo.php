<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type OrderInfo
 *
 * @see https://core.telegram.org/bots/api#orderinfo
 *
 * This object represents information about an order.
 */
class OrderInfo extends Type {
    /**
     * Optional. User name
     */
    public string $name;
    /**
     * Optional. User's phone number
     */
    public string $phoneNumber;
    /**
     * Optional. User email
     */
    public string $email;
    /**
     * Optional. User shipping address
     */
    public ShippingAddress $shippingAddress;
}
