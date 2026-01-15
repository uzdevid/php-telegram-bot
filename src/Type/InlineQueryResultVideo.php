<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type InlineQueryResultVideo
 *
 * @link https://core.telegram.org/bots/api#inlinequeryresultvideo
 *
 * Represents a link to a page containing an embedded video player or a video file. By default, this video file will be sent by the user with an optional caption. Alternatively, you can use input_message_content to send a message with the specified content instead of the video.
 */
class InlineQueryResultVideo extends Type {
    /**
     * @var string Type of the result, must be video
     */
    public string $type;

    /**
     * @var string Unique identifier for this result, 1-64 bytes
     */
    public string $id;

    /**
     * @var string A valid URL for the embedded video player or video file
     */
    public string $videoUrl;

    /**
     * @var string MIME type of the content of the video URL, “text/html” or “video/mp4”
     */
    public string $mimeType;

    /**
     * @var string URL of the thumbnail (JPEG only) for the video
     */
    public string $thumbnailUrl;

    /**
     * @var string Title for the result
     */
    public string $title;

    /**
     * @var string|null Optional. Caption of the video to be sent, 0-1024 characters after entities parsing
     */
    public string|null $caption;

    /**
     * @var string|null Optional. Mode for parsing entities in the video caption. See formatting options for more details.
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
     * @var int|null Optional. Video width
     */
    public int|null $videoWidth;

    /**
     * @var int|null Optional. Video height
     */
    public int|null $videoHeight;

    /**
     * @var int|null Optional. Video duration in seconds
     */
    public int|null $videoDuration;

    /**
     * @var string|null Optional. Short description of the result
     */
    public string|null $description;

    /**
     * @var InlineKeyboardMarkup|null Optional. Inline keyboard attached to the message
     */
    public InlineKeyboardMarkup|null $replyMarkup;

    /**
     * @var InputMessageContent|null Optional. Content of the message to be sent instead of the video. This field is required if InlineQueryResultVideo is used to send an HTML-page as a result (e.g., a YouTube video).
     */
    public InputMessageContent|null $inputMessageContent;
}
