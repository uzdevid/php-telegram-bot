<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type InlineQueryResult
 *
 * @link https://core.telegram.org/bots/api#inlinequeryresult
 *
 * This object represents one result of an inline query. Telegram clients currently support results of the following 20 types:
 */
class InlineQueryResult extends Type {
    /**
     * @var string Type of the result, must be article
     */
    public string $type;

    /**
     * @var string Unique identifier for this result, 1-64 Bytes
     */
    public string $id;

    /**
     * @var string Title of the result
     */
    public string $title;

    /**
     * @var InputMessageContent Content of the message to be sent
     */
    public InputMessageContent $inputMessageContent;

    /**
     * @var InlineKeyboardMarkup|null Optional. Inline keyboard attached to the message
     */
    public InlineKeyboardMarkup|null $replyMarkup;

    /**
     * @var string|null Optional. URL of the result
     */
    public string|null $url;

    /**
     * @var string|null Optional. Short description of the result
     */
    public string|null $description;

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
