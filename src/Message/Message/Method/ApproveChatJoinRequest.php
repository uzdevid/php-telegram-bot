<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to approve a chat join request. The bot must be an administrator in the chat for
 * this to work and must have the can_invite_users administrator right. Returns True on success.
 *
 * Typical usage: instantiate the method with the required 'user_id' field, then chain optional
 * builder methods before dispatching the request.
 *
 * @see https://core.telegram.org/bots/api#approvechatjoinrequest
 */
class ApproveChatJoinRequest extends Method implements MethodInterface {
    /**
     * Creates a new ApproveChatJoinRequest method and sets the required 'user_id' field.
     *
     * @param int $userId Unique identifier of the target user
     */
    public function __construct(int $userId) {
        parent::__construct();
        $this->addAttribute('user_id', $userId);
    }

    public function methodName(): string {
        return 'approveChatJoinRequest';
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
