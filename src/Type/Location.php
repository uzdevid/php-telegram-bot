<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type Location
 *
 * @see https://core.telegram.org/bots/api#location
 *
 * This object represents a point on the map.
 */
class Location extends Type {
    /**
     * Longitude as defined by the sender
     */
    public float $longitude;
    /**
     * Latitude as defined by the sender
     */
    public float $latitude;
    /**
     * Optional. The radius of uncertainty for the location, measured in meters; 0-1500
     */
    public float $horizontalAccuracy;
    /**
     * Optional. Time relative to the message sending date, during which the location can be updated; in seconds. For
     * active live locations only.
     */
    public int $livePeriod;
    /**
     * Optional. The direction in which user is moving, in degrees; 1-360. For active live locations only.
     */
    public int $heading;
    /**
     * Optional. The maximum distance for proximity alerts about approaching another chat member, in meters. For sent
     * live locations only.
     */
    public int $proximityAlertRadius;
}
