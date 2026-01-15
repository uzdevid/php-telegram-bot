<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type TextQuote
 *
 * @link https://core.telegram.org/bots/api#textquote
 *
 * This object contains information about the quoted part of a message that is replied to by the given message.
 */
class TextQuote extends Type {
    /**
     * @var string Text of the quoted part of a message that is replied to by the given message
     */
    public string $text;

    /**
     * @var MessageEntity[]|null Optional. Special entities that appear in the quote. Currently, only bold, italic, underline, strikethrough, spoiler, and custom_emoji entities are kept in quotes.
     */
    public array|null $entities;

    /**
     * @var int Approximate quote position in the original message in UTF-16 code units as specified by the sender
     */
    public int $position;

    /**
     * @var bool|null Optional. True, if the quote was chosen manually by the message sender. Otherwise, the quote was added automatically by the server.
     */
    public bool|null $isManual;
}
