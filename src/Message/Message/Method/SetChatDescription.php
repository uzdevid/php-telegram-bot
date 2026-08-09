<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to change the description of a group, a supergroup or a channel. The bot must be
 * an administrator in the chat for this to work and must have the appropriate administrator rights.
 * Returns True on success.
 *
 * Typical usage: instantiate the method, chain any optional builder methods, and then dispatch the
 * request.
 *
 * @see https://core.telegram.org/bots/api#setchatdescription
 */
class SetChatDescription extends Method implements MethodInterface {
    public function methodName(): string {
        return 'setChatDescription';
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

    /**
     * New chat description, 0-255 characters
     *
     * @param string $description New chat description, 0-255 characters
     *
     * @return $this
     */
    public function description(string $description): static {
        $this->addAttribute('description', $description);
        return $this;
    }
}
