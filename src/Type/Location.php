<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type Location
 *
 * @link https://core.telegram.org/bots/api#location
 *
 * This object represents a point on the map.
 */
class Location extends Type {
    /**
     * @var float Latitude as defined by the sender
     */
    public float $latitude;

    /**
     * @var float Longitude as defined by the sender
     */
    public float $longitude;

    /**
     * @var float|null Optional. The radius of uncertainty for the location, measured in meters; 0-1500
     */
    public float|null $horizontalAccuracy;

    /**
     * @var int|null Optional. Time relative to the message sending date, during which the location can be updated; in seconds. For active live locations only.
     */
    public int|null $livePeriod;

    /**
     * @var int|null Optional. The direction in which user is moving, in degrees; 1-360. For active live locations only.
     */
    public int|null $heading;

    /**
     * @var int|null Optional. The maximum distance for proximity alerts about approaching another chat member, in meters. For sent live locations only.
     */
    public int|null $proximityAlertRadius;
}
