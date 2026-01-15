<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type MessageOriginChannel
 *
 * @link https://core.telegram.org/bots/api#messageoriginchannel
 *
 * The message was originally sent to a channel chat.
 */
class MessageOriginChannel extends Type {
    /**
     * @var string Type of the message origin, always “channel”
     */
    public string $type;

    /**
     * @var int Date the message was sent originally in Unix time
     */
    public int $date;

    /**
     * @var Chat Channel chat to which the message was originally sent
     */
    public Chat $chat;

    /**
     * @var int Unique message identifier inside the chat
     */
    public int $messageId;

    /**
     * @var string|null Optional. Signature of the original post author
     */
    public string|null $authorSignature;
}
