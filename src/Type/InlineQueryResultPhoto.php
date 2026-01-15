<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type InlineQueryResultPhoto
 *
 * @link https://core.telegram.org/bots/api#inlinequeryresultphoto
 *
 * Represents a link to a photo. By default, this photo will be sent by the user with optional caption. Alternatively, you can use input_message_content to send a message with the specified content instead of the photo.
 */
class InlineQueryResultPhoto extends Type {
    /**
     * @var string Type of the result, must be photo
     */
    public string $type;

    /**
     * @var string Unique identifier for this result, 1-64 bytes
     */
    public string $id;

    /**
     * @var string A valid URL of the photo. Photo must be in JPEG format. Photo size must not exceed 5MB
     */
    public string $photoUrl;

    /**
     * @var string URL of the thumbnail for the photo
     */
    public string $thumbnailUrl;

    /**
     * @var int|null Optional. Width of the photo
     */
    public int|null $photoWidth;

    /**
     * @var int|null Optional. Height of the photo
     */
    public int|null $photoHeight;

    /**
     * @var string|null Optional. Title for the result
     */
    public string|null $title;

    /**
     * @var string|null Optional. Short description of the result
     */
    public string|null $description;

    /**
     * @var string|null Optional. Caption of the photo to be sent, 0-1024 characters after entities parsing
     */
    public string|null $caption;

    /**
     * @var string|null Optional. Mode for parsing entities in the photo caption. See formatting options for more details.
     */
    public string|null $parseMode;

    /**
     * @var MessageEntity[]|null Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     */
    public array|null $captionEntities;

    /**
     * @var bool|null Optional. Pass True, if the caption must be shown above the message media
     */
    public bool|null $showCaptionAboveMedia;

    /**
     * @var InlineKeyboardMarkup|null Optional. Inline keyboard attached to the message
     */
    public InlineKeyboardMarkup|null $replyMarkup;

    /**
     * @var InputMessageContent|null Optional. Content of the message to be sent instead of the photo
     */
    public InputMessageContent|null $inputMessageContent;
}
