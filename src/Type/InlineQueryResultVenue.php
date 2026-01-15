<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type InlineQueryResultVenue
 *
 * @link https://core.telegram.org/bots/api#inlinequeryresultvenue
 *
 * Represents a venue. By default, the venue will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the venue.
 */
class InlineQueryResultVenue extends Type {
    /**
     * @var string Type of the result, must be venue
     */
    public string $type;

    /**
     * @var string Unique identifier for this result, 1-64 Bytes
     */
    public string $id;

    /**
     * @var float Latitude of the venue location in degrees
     */
    public float $latitude;

    /**
     * @var float Longitude of the venue location in degrees
     */
    public float $longitude;

    /**
     * @var string Title of the venue
     */
    public string $title;

    /**
     * @var string Address of the venue
     */
    public string $address;

    /**
     * @var string|null Optional. Foursquare identifier of the venue if known
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

    /**
     * @var InlineKeyboardMarkup|null Optional. Inline keyboard attached to the message
     */
    public InlineKeyboardMarkup|null $replyMarkup;

    /**
     * @var InputMessageContent|null Optional. Content of the message to be sent instead of the venue
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
