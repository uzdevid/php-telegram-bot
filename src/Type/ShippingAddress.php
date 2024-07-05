<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type ShippingAddress
 *
 * @link https://core.telegram.org/bots/api#shippingaddress
 *
 * This object represents information about an order.
 */
class ShippingAddress extends Type {

    public string $countryCode;
    public string $state;
    public string $city;
    public string $streetLine1;
    public string $streetLine2;
    public string $postCode;
}