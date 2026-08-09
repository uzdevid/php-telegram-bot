<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to get the list of boosts added to a chat by a user. Requires administrator
 * rights in the chat. Returns a UserChatBoosts object.
 *
 * Typical usage: instantiate the method with the required 'user_id' field, then chain optional
 * builder methods before dispatching the request.
 *
 * @link https://core.telegram.org/bots/api#getuserchatboosts
 */
class GetUserChatBoosts extends Method implements MethodInterface {
    /**
     * Creates a new GetUserChatBoosts method and sets the required 'user_id' field.
     *
     * @param int $userId Unique identifier of the target user
     */
    public function __construct(int $userId) {
        parent::__construct();
        $this->addAttribute('user_id', $userId);
    }

    public function methodName(): string {
        return 'getUserChatBoosts';
    }

    /**
     * Unique identifier for the chat or username of the channel in the format @username
     *
     * @param int|string $chatId Unique identifier for the chat or username of the channel in the
     *   format @username
     * @return $this
     */
    public function chatId(int|string $chatId): static {
        $this->addAttribute('chat_id', $chatId);
        return $this;
    }
}
