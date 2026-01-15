<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type BusinessMessagesDeleted
 *
 * @link https://core.telegram.org/bots/api#businessmessagesdeleted
 *
 * This object is received when messages are deleted from a connected business account.
 */
class BusinessMessagesDeleted extends Type {
    /**
     * @var string Unique identifier of the business connection
     */
    public string $businessConnectionId;

    /**
     * @var Chat Information about a chat in the business account. The bot may not have access to the chat or the corresponding user.
     */
    public Chat $chat;

    /**
     * @var int[] The list of identifiers of deleted messages in the chat of the business account
     */
    public array $messageIds;
}
