<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to change the title of a chat. Titles can't be changed for private chats. The bot
 * must be an administrator in the chat for this to work and must have the appropriate administrator
 * rights. Returns True on success.
 *
 * Typical usage: instantiate the method with the required 'title' field, then chain optional
 * builder methods before dispatching the request.
 *
 * @link https://core.telegram.org/bots/api#setchattitle
 */
class SetChatTitle extends Method implements MethodInterface {
    /**
     * Creates a new SetChatTitle method and sets the required 'title' field.
     *
     * @param string $title New chat title, 1-128 characters
     */
    public function __construct(string $title) {
        parent::__construct();
        $this->addAttribute('title', $title);
    }

    public function methodName(): string {
        return 'setChatTitle';
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
