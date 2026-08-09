<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to remove a message from the list of pinned messages in a chat. In private chats
 * and channel direct messages chats, all messages can be unpinned. Conversely, the bot must be an
 * administrator with the 'can_pin_messages' right or the 'can_edit_messages' right to unpin
 * messages in groups and channels respectively. Returns True on success.
 *
 * Typical usage: instantiate the method, chain any optional builder methods, and then dispatch the
 * request.
 *
 * @link https://core.telegram.org/bots/api#unpinchatmessage
 */
class UnpinChatMessage extends Method implements MethodInterface {
    public function methodName(): string {
        return 'unpinChatMessage';
    }

    /**
     * Unique identifier of the business connection on behalf of which the message will be unpinned
     *
     * @param string $businessConnectionId Unique identifier of the business connection on behalf of
     *   which the message will be unpinned
     * @return $this
     */
    public function businessConnectionId(string $businessConnectionId): static {
        $this->addAttribute('business_connection_id', $businessConnectionId);
        return $this;
    }

    /**
     * Unique identifier for the target chat or username of the target channel in the format
     * @username
     *
     * @param int|string $chatId Unique identifier for the target chat or username of the target
     *   channel in the format @username
     * @return $this
     */
    public function chatId(int|string $chatId): static {
        $this->addAttribute('chat_id', $chatId);
        return $this;
    }

    /**
     * Identifier of the message to unpin. Required if business_connection_id is specified. If not
     * specified, the most recent pinned message (by sending date) will be unpinned.
     *
     * @param int $messageId Identifier of the message to unpin. Required if business_connection_id
     *   is specified. If not specified, the most recent pinned message (by sending date) will be
     *   unpinned.
     * @return $this
     */
    public function messageId(int $messageId): static {
        $this->addAttribute('message_id', $messageId);
        return $this;
    }
}
