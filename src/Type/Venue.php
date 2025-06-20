<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type Venue
 *
 * @link https://core.telegram.org/bots/api#venue
 *
 * This object represents a venue.
 */
class Venue extends Type {
    public Location $location;
    public string $title;
    public string $address;
    public string $foursquareId;
    public string $foursquareType;
    public string $googlePlaceId;
    public string $googlePlaceType;
}