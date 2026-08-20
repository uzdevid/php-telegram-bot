<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type Venue
 *
 * @see https://core.telegram.org/bots/api#venue
 *
 * This object represents a venue.
 */
class Venue extends Type {
    /**
     * Venue location. Can't be a live location.
     */
    public Location $location;
    /**
     * Name of the venue
     */
    public string $title;
    /**
     * Address of the venue
     */
    public string $address;
    /**
     * Optional. Foursquare identifier of the venue
     */
    public string $foursquareId;
    /**
     * Optional. Foursquare type of the venue. (For example, “arts_entertainment/default”,
     * “arts_entertainment/aquarium” or “food/icecream”.)
     */
    public string $foursquareType;
    /**
     * Optional. Google Places identifier of the venue
     */
    public string $googlePlaceId;
    /**
     * Optional. Google Places type of the venue. (See supported types.)
     */
    public string $googlePlaceType;
}
