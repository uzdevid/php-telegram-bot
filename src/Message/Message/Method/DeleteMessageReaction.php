<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to remove a reaction from a message in a group or a supergroup chat. The bot must
 * have the 'can_delete_messages' administrator right in the chat. Returns True on success.
 *
 * Typical usage: instantiate the method with the required 'message_id' field, then chain optional
 * builder methods before dispatching the request.
 *
 * @link https://core.telegram.org/bots/api#deletemessagereaction
 */
class DeleteMessageReaction extends Method implements MethodInterface {
    /**
     * Creates a new DeleteMessageReaction method and sets the required 'message_id' field.
     *
     * @param int $messageId Identifier of the target message
     */
    public function __construct(int $messageId) {
        parent::__construct();
        $this->addAttribute('message_id', $messageId);
    }

    public function methodName(): string {
        return 'deleteMessageReaction';
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
     * Identifier of the user whose reaction will be removed, if the reaction was added by a user
     *
     * @param int $userId Identifier of the user whose reaction will be removed, if the reaction was
     *   added by a user
     * @return $this
     */
    public function userId(int $userId): static {
        $this->addAttribute('user_id', $userId);
        return $this;
    }

    /**
     * Identifier of the chat whose reaction will be removed, if the reaction was added by a chat
     *
     * @param int $actorChatId Identifier of the chat whose reaction will be removed, if the
     *   reaction was added by a chat
     * @return $this
     */
    public function actorChatId(int $actorChatId): static {
        $this->addAttribute('actor_chat_id', $actorChatId);
        return $this;
    }
}
