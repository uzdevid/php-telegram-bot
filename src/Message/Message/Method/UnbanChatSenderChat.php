<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to unban a previously banned channel chat in a supergroup or channel. The bot
 * must be an administrator for this to work and must have the appropriate administrator rights.
 * Returns True on success.
 *
 * Typical usage: instantiate the method with the required 'sender_chat_id' field, then chain
 * optional builder methods before dispatching the request.
 *
 * @see https://core.telegram.org/bots/api#unbanchatsenderchat
 */
class UnbanChatSenderChat extends Method implements MethodInterface {
    /**
     * Creates a new UnbanChatSenderChat method and sets the required 'sender_chat_id' field.
     *
     * @param int $senderChatId Unique identifier of the target sender chat
     */
    public function __construct(int $senderChatId) {
        parent::__construct();
        $this->addAttribute('sender_chat_id', $senderChatId);
    }

    public function methodName(): string {
        return 'unbanChatSenderChat';
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
