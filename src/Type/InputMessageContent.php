<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type InputMessageContent
 *
 * @link https://core.telegram.org/bots/api#inputmessagecontent
 *
 * This object represents the content of a message to be sent as a result of an inline query. Telegram clients currently support the following 5 types:
 */
class InputMessageContent extends Type {
    /**
     * @var string Text of the message to be sent, 1-4096 characters
     */
    public string $messageText;

    /**
     * @var string|null Optional. Mode for parsing entities in the message text. See formatting options for more details.
     */
    public string|null $parseMode;

    /**
     * @var MessageEntity[]|null Optional. List of special entities that appear in message text, which can be specified instead of parse_mode
     */
    public array|null $entities;

    /**
     * @var LinkPreviewOptions|null Optional. Link preview generation options for the message
     */
    public LinkPreviewOptions|null $linkPreviewOptions;
}
