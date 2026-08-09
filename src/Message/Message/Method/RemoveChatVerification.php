<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Removes verification from a chat that is currently verified on behalf of the organization
 * represented by the bot. Returns True on success.
 *
 * Typical usage: instantiate the method, chain any optional builder methods, and then dispatch the
 * request.
 *
 * @see https://core.telegram.org/bots/api#removechatverification
 */
class RemoveChatVerification extends Method implements MethodInterface {
    public function methodName(): string {
        return 'removeChatVerification';
    }

    /**
     * Unique identifier for the target chat or username of the target bot or channel in the format
     *
     * @username
     *
     * @param int|string $chatId Unique identifier for the target chat or username of the target bot
     *   or channel in the format @username
     *
     * @return $this
     */
    public function chatId(int|string $chatId): static {
        $this->addAttribute('chat_id', $chatId);
        return $this;
    }
}
