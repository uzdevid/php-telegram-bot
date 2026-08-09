<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to clear the list of pinned messages in a chat. In private chats and channel
 * direct messages chats, no additional rights are required to unpin all pinned messages.
 * Conversely, the bot must be an administrator with the 'can_pin_messages' right or the
 * 'can_edit_messages' right to unpin all pinned messages in groups and channels respectively.
 * Returns True on success.
 *
 * Typical usage: instantiate the method, chain any optional builder methods, and then dispatch the
 * request.
 *
 * @see https://core.telegram.org/bots/api#unpinallchatmessages
 */
class UnpinAllChatMessages extends Method implements MethodInterface {
    public function methodName(): string {
        return 'unpinAllChatMessages';
    }

    /**
     * Unique identifier for the target chat or username of the target channel in the format
     *
     * @username
     *
     * @param int|string $chatId Unique identifier for the target chat or username of the target
     *   channel in the format @username
     *
     * @return $this
     */
    public function chatId(int|string $chatId): static {
        $this->addAttribute('chat_id', $chatId);
        return $this;
    }
}
