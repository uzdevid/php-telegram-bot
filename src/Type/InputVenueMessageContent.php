<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type InputVenueMessageContent
 *
 * @link https://core.telegram.org/bots/api#inputvenuemessagecontent
 *
 * Represents the content of a venue message to be sent as the result of an inline query.
 */
class InputVenueMessageContent extends Type {
    /**
     * @var float Latitude of the venue in degrees
     */
    public float $latitude;

    /**
     * @var float Longitude of the venue in degrees
     */
    public float $longitude;

    /**
     * @var string Name of the venue
     */
    public string $title;

    /**
     * @var string Address of the venue
     */
    public string $address;

    /**
     * @var string|null Optional. Foursquare identifier of the venue, if known
     */
    public string|null $foursquareId;

    /**
     * @var string|null Optional. Foursquare type of the venue, if known. (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.)
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
