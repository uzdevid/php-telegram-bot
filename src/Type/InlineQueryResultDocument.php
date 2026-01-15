<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type InlineQueryResultDocument
 *
 * @link https://core.telegram.org/bots/api#inlinequeryresultdocument
 *
 * Represents a link to a file. By default, this file will be sent by the user with an optional caption. Alternatively, you can use input_message_content to send a message with the specified content instead of the file. Currently, only .PDF and .ZIP files can be sent using this method.
 */
class InlineQueryResultDocument extends Type {
    /**
     * @var string Type of the result, must be document
     */
    public string $type;

    /**
     * @var string Unique identifier for this result, 1-64 bytes
     */
    public string $id;

    /**
     * @var string Title for the result
     */
    public string $title;

    /**
     * @var string|null Optional. Caption of the document to be sent, 0-1024 characters after entities parsing
     */
    public string|null $caption;

    /**
     * @var string|null Optional. Mode for parsing entities in the document caption. See formatting options for more details.
     */
    public string|null $parseMode;

    /**
     * @var MessageEntity[]|null Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     */
    public array|null $captionEntities;

    /**
     * @var string A valid URL for the file
     */
    public string $documentUrl;

    /**
     * @var string MIME type of the content of the file, either “application/pdf” or “application/zip”
     */
    public string $mimeType;

    /**
     * @var string|null Optional. Short description of the result
     */
    public string|null $description;

    /**
     * @var InlineKeyboardMarkup|null Optional. Inline keyboard attached to the message
     */
    public InlineKeyboardMarkup|null $replyMarkup;

    /**
     * @var InputMessageContent|null Optional. Content of the message to be sent instead of the file
     */
    public InputMessageContent|null $inputMessageContent;

    /**
     * @var string|null Optional. URL of the thumbnail (JPEG only) for the file
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
