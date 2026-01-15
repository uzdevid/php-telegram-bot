<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type InlineQueryResultMpeg4Gif
 *
 * @link https://core.telegram.org/bots/api#inlinequeryresultmpeg4gif
 *
 * Represents a link to a video animation (H.264/MPEG-4 AVC video without sound). By default, this animated MPEG-4 file will be sent by the user with optional caption. Alternatively, you can use input_message_content to send a message with the specified content instead of the animation.
 */
class InlineQueryResultMpeg4Gif extends Type {
    /**
     * @var string Type of the result, must be mpeg4_gif
     */
    public string $type;

    /**
     * @var string Unique identifier for this result, 1-64 bytes
     */
    public string $id;

    /**
     * @var string A valid URL for the MPEG4 file
     */
    public string $mpeg4Url;

    /**
     * @var int|null Optional. Video width
     */
    public int|null $mpeg4Width;

    /**
     * @var int|null Optional. Video height
     */
    public int|null $mpeg4Height;

    /**
     * @var int|null Optional. Video duration in seconds
     */
    public int|null $mpeg4Duration;

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
     * @var string|null Optional. Caption of the MPEG-4 file to be sent, 0-1024 characters after entities parsing
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
     * @var InputMessageContent|null Optional. Content of the message to be sent instead of the video animation
     */
    public InputMessageContent|null $inputMessageContent;
}
