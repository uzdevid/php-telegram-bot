<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to remove up to 10000 recent reactions in a group or a supergroup chat added by a
 * given user or chat. The bot must have the 'can_delete_messages' administrator right in the chat.
 * Returns True on success.
 *
 * Typical usage: instantiate the method, chain any optional builder methods, and then dispatch the
 * request.
 *
 * @link https://core.telegram.org/bots/api#deleteallmessagereactions
 */
class DeleteAllMessageReactions extends Method implements MethodInterface {
    public function methodName(): string {
        return 'deleteAllMessageReactions';
    }

    /**
     * Unique identifier for the target chat or username of the target supergroup in the format
     * @username
     *
     * @param int|string $chatId Unique identifier for the target chat or username of the target
     *   supergroup in the format @username
     * @return $this
     */
    public function chatId(int|string $chatId): static {
        $this->addAttribute('chat_id', $chatId);
        return $this;
    }

    /**
     * Identifier of the user whose reactions will be removed, if the reactions were added by a user
     *
     * @param int $userId Identifier of the user whose reactions will be removed, if the reactions
     *   were added by a user
     * @return $this
     */
    public function userId(int $userId): static {
        $this->addAttribute('user_id', $userId);
        return $this;
    }

    /**
     * Identifier of the chat whose reactions will be removed, if the reactions were added by a chat
     *
     * @param int $actorChatId Identifier of the chat whose reactions will be removed, if the
     *   reactions were added by a chat
     * @return $this
     */
    public function actorChatId(int $actorChatId): static {
        $this->addAttribute('actor_chat_id', $actorChatId);
        return $this;
    }
}
