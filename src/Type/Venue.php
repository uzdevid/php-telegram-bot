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
    /**
     * @var Location Venue location. Can't be a live location
     */
    public Location $location;

    /**
     * @var string Name of the venue
     */
    public string $title;

    /**
     * @var string Address of the venue
     */
    public string $address;

    /**
     * @var string|null Optional. Foursquare identifier of the venue
     */
    public string|null $foursquareId;

    /**
     * @var string|null Optional. Foursquare type of the venue. (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.)
     */
    public string|null $foursquareType;

    /**
     * @var string|null Optional. Google Places identifier of the venue
     */
    public string|null $googlePlaceId;

    /**
     * @var string|null Optional. Google Places type of the venue. (See supported types.)
     */
    public string|null $googlePlaceType;
}
