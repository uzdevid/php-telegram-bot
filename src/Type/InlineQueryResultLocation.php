<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type InlineQueryResultLocation
 *
 * @link https://core.telegram.org/bots/api#inlinequeryresultlocation
 *
 * Represents a location on a map. By default, the location will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the location.
 */
class InlineQueryResultLocation extends Type {
    /**
     * @var string Type of the result, must be location
     */
    public string $type;

    /**
     * @var string Unique identifier for this result, 1-64 Bytes
     */
    public string $id;

    /**
     * @var float Location latitude in degrees
     */
    public float $latitude;

    /**
     * @var float Location longitude in degrees
     */
    public float $longitude;

    /**
     * @var string Location title
     */
    public string $title;

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

    /**
     * @var InlineKeyboardMarkup|null Optional. Inline keyboard attached to the message
     */
    public InlineKeyboardMarkup|null $replyMarkup;

    /**
     * @var InputMessageContent|null Optional. Content of the message to be sent instead of the location
     */
    public InputMessageContent|null $inputMessageContent;

    /**
     * @var string|null Optional. Url of the thumbnail for the result
     */
    public string|null $thumbnailUrl;

    /**
     * @var int|null Optional. Thumbnail width
     */
    public int|null $thumbnailWidth;

    /**
     * @var int|null Optional. Thumbnail height
     */
    public int|null $thumbnailHeight;
}
