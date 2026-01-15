<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type InlineQueryResultArticle
 *
 * @link https://core.telegram.org/bots/api#inlinequeryresultarticle
 *
 * Represents a link to an article or web page.
 */
class InlineQueryResultArticle extends Type {
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
