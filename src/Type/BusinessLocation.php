<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type BusinessLocation
 *
 * @link https://core.telegram.org/bots/api#businesslocation
 *
 * Contains information about the location of a Telegram Business account.
 */
class BusinessLocation extends Type {
    /**
     * @var string Address of the business
     */
    public string $address;

    /**
     * @var Location|null Optional. Location of the business
     */
    public Location|null $location;
}
