<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type InlineQueryResultGif
 *
 * @link https://core.telegram.org/bots/api#inlinequeryresultgif
 *
 * Represents a link to an animated GIF file. By default, this animated GIF file will be sent by the user with optional caption. Alternatively, you can use input_message_content to send a message with the specified content instead of the animation.
 */
class InlineQueryResultGif extends Type {
    /**
     * @var string Type of the result, must be gif
     */
    public string $type;

    /**
     * @var string Unique identifier for this result, 1-64 bytes
     */
    public string $id;

    /**
     * @var string A valid URL for the GIF file
     */
    public string $gifUrl;

    /**
     * @var int|null Optional. Width of the GIF
     */
    public int|null $gifWidth;

    /**
     * @var int|null Optional. Height of the GIF
     */
    public int|null $gifHeight;

    /**
     * @var int|null Optional. Duration of the GIF in seconds
     */
    public int|null $gifDuration;

    /**
     * @var string URL of the static (JPEG or GIF) or animated (MPEG4) thumbnail for the result
     */
    public string $thumbnailUrl;

    /**
     * @var string|null Optional. MIME type of the thumbnail, must be one of “image/jpeg”, “image/gif”, or “video/mp4”. Defaults to “image/jpeg”
     */
    public string|null $thumbnailMimeType;

    /**
     * @var string|null Optional. Title for the result
     */
    public string|null $title;

    /**
     * @var string|null Optional. Caption of the GIF file to be sent, 0-1024 characters after entities parsing
     */
    public string|null $caption;

    /**
     * @var string|null Optional. Mode for parsing entities in the caption. See formatting options for more details.
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
     * @var InputMessageContent|null Optional. Content of the message to be sent instead of the GIF animation
     */
    public InputMessageContent|null $inputMessageContent;
}
