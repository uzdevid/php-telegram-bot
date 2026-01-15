<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type MessageReactionCountUpdated
 *
 * @link https://core.telegram.org/bots/api#messagereactioncountupdated
 *
 * This object represents reaction changes on a message with anonymous reactions.
 */
class MessageReactionCountUpdated extends Type {
    /**
     * @var Chat The chat containing the message
     */
    public Chat $chat;

    /**
     * @var int Unique message identifier inside the chat
     */
    public int $messageId;

    /**
     * @var int Date of the change in Unix time
     */
    public int $date;

    /**
     * @var ReactionCount[] List of reactions that are present on the message
     */
    public array $reactions;
}
