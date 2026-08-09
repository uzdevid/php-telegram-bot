<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Verifies a chat on behalf of the organization which is represented by the bot. Returns True on
 * success.
 *
 * Typical usage: instantiate the method, chain any optional builder methods, and then dispatch the
 * request.
 *
 * @see https://core.telegram.org/bots/api#verifychat
 */
class VerifyChat extends Method implements MethodInterface {
    public function methodName(): string {
        return 'verifyChat';
    }

    /**
     * Unique identifier for the target chat or username of the target bot, supergroup or channel in
     * the format @username . Channel direct messages chats can't be verified.
     *
     * @param int|string $chatId Unique identifier for the target chat or username of the target
     *   bot, supergroup or channel in the format @username . Channel direct messages chats can't be
     *   verified.
     *
     * @return $this
     */
    public function chatId(int|string $chatId): static {
        $this->addAttribute('chat_id', $chatId);
        return $this;
    }

    /**
     * Custom description for the verification; 0-70 characters. Must be empty if the organization
     * isn't allowed to provide a custom verification description.
     *
     * @param string $customDescription Custom description for the verification; 0-70 characters.
     *   Must be empty if the organization isn't allowed to provide a custom verification
     *   description.
     *
     * @return $this
     */
    public function customDescription(string $customDescription): static {
        $this->addAttribute('custom_description', $customDescription);
        return $this;
    }
}
