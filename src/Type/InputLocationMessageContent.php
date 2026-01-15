<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type InputLocationMessageContent
 *
 * @link https://core.telegram.org/bots/api#inputlocationmessagecontent
 *
 * Represents the content of a location message to be sent as the result of an inline query.
 */
class InputLocationMessageContent extends Type {
    /**
     * @var float Latitude of the location in degrees
     */
    public float $latitude;

    /**
     * @var float Longitude of the location in degrees
     */
    public float $longitude;

    /**
     * @var float|null Optional. The radius of uncertainty for the location, measured in meters; 0-1500
     */
    public float|null $horizontalAccuracy;

    /**
     * @var int|null Optional. Period in seconds during which the location can be updated, should be between 60 and 86400, or 0x7FFFFFFF for live locations that can be edited indefinitely.
     */
    public int|null $livePeriod;

    /**
     * @var int|null Optional. For live locations, a direction in which the user is moving, in degrees. Must be between 1 and 360 if specified.
     */
    public int|null $heading;

    /**
     * @var int|null Optional. For live locations, a maximum distance for proximity alerts about approaching another chat member, in meters. Must be between 1 and 100000 if specified.
     */
    public int|null $proximityAlertRadius;
}
