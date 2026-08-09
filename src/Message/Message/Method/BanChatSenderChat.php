<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to ban a channel chat in a supergroup or a channel. Until the chat is unbanned ,
 * the owner of the banned chat won't be able to send messages on behalf of any of their channels .
 * The bot must be an administrator in the supergroup or channel for this to work and must have the
 * appropriate administrator rights. Returns True on success.
 *
 * Typical usage: instantiate the method with the required 'sender_chat_id' field, then chain
 * optional builder methods before dispatching the request.
 *
 * @link https://core.telegram.org/bots/api#banchatsenderchat
 */
class BanChatSenderChat extends Method implements MethodInterface {
    /**
     * Creates a new BanChatSenderChat method and sets the required 'sender_chat_id' field.
     *
     * @param int $senderChatId Unique identifier of the target sender chat
     */
    public function __construct(int $senderChatId) {
        parent::__construct();
        $this->addAttribute('sender_chat_id', $senderChatId);
    }

    public function methodName(): string {
        return 'banChatSenderChat';
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
}
