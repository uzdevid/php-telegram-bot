<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type InaccessibleMessage
 *
 * @link https://core.telegram.org/bots/api#inaccessiblemessage
 *
 * This object describes a message that was deleted or is otherwise inaccessible to the bot.
 */
class InaccessibleMessage extends Type {
    /**
     * @var Chat Chat the message belonged to
     */
    public Chat $chat;

    /**
     * @var int Unique message identifier inside the chat
     */
    public int $messageId;

    /**
     * @var int Always 0. The field can be used to differentiate regular and inaccessible messages.
     */
    public int $date;
}
