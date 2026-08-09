<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to set a tag for a regular member in a group or a supergroup. The bot must be an
 * administrator in the chat for this to work and must have the can_manage_tags administrator right.
 * Returns True on success.
 *
 * Typical usage: instantiate the method with the required 'user_id' field, then chain optional
 * builder methods before dispatching the request.
 *
 * @see https://core.telegram.org/bots/api#setchatmembertag
 */
class SetChatMemberTag extends Method implements MethodInterface {
    /**
     * Creates a new SetChatMemberTag method and sets the required 'user_id' field.
     *
     * @param int $userId Unique identifier of the target user
     */
    public function __construct(int $userId) {
        parent::__construct();
        $this->addAttribute('user_id', $userId);
    }

    public function methodName(): string {
        return 'setChatMemberTag';
    }

    /**
     * Unique identifier for the target chat or username of the target supergroup in the format
     *
     * @username
     *
     * @param int|string $chatId Unique identifier for the target chat or username of the target
     *   supergroup in the format @username
     *
     * @return $this
     */
    public function chatId(int|string $chatId): static {
        $this->addAttribute('chat_id', $chatId);
        return $this;
    }

    /**
     * New tag for the member; 0-16 characters, emoji are not allowed
     *
     * @param string $tag New tag for the member; 0-16 characters, emoji are not allowed
     *
     * @return $this
     */
    public function tag(string $tag): static {
        $this->addAttribute('tag', $tag);
        return $this;
    }
}
