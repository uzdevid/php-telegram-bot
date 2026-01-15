<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type LocationAddress
 *
 * @link https://core.telegram.org/bots/api#locationaddress
 *
 * Describes the physical address of a location.
 */
class LocationAddress extends Type {
    /**
     * @var string The two-letter ISO 3166-1 alpha-2 country code of the country where the location is located
     */
    public string $countryCode;

    /**
     * @var string|null Optional. State of the location
     */
    public string|null $state;

    /**
     * @var string|null Optional. City of the location
     */
    public string|null $city;

    /**
     * @var string|null Optional. Street address of the location
     */
    public string|null $street;
}
