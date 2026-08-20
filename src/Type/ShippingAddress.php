<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type ShippingAddress
 *
 * @see https://core.telegram.org/bots/api#shippingaddress
 *
 * This object represents information about an order.
 */
class ShippingAddress extends Type {
    /**
     * Two-letter ISO 3166-1 alpha-2 country code
     */
    public string $countryCode;
    /**
     * State, if applicable
     */
    public string $state;
    /**
     * City
     */
    public string $city;
    /**
     * First line for the address
     */
    public string $streetLine1;
    /**
     * Second line for the address
     */
    public string $streetLine2;
    /**
     * Address post code
     */
    public string $postCode;
}
