<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type InputTextMessageContent
 *
 * @link https://core.telegram.org/bots/api#inputtextmessagecontent
 *
 * Represents the content of a text message to be sent as the result of an inline query.
 */
class InputTextMessageContent extends Type {
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
