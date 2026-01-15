<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type MessageOriginChat
 *
 * @link https://core.telegram.org/bots/api#messageoriginchat
 *
 * The message was originally sent on behalf of a chat to a group chat.
 */
class MessageOriginChat extends Type {
    /**
     * @var string Type of the message origin, always “chat”
     */
    public string $type;

    /**
     * @var int Date the message was sent originally in Unix time
     */
    public int $date;

    /**
     * @var Chat Chat that sent the message originally
     */
    public Chat $senderChat;

    /**
     * @var string|null Optional. For messages originally sent by an anonymous chat administrator, original message author signature
     */
    public string|null $authorSignature;
}
