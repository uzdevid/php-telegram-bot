<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method SetChatTitle
 *
 * Use this method to change the title of a chat. Titles can't be changed for private chats. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns True on success.
 */
class SetChatTitle extends Method implements MethodInterface {
    public function __construct(int|string $chatId, string $title) {
        parent::__construct();
        $this->addAttribute('chat_id', $chatId);
        $this->addAttribute('title', $title);
    }

    public function methodName(): string {
        return "setChatTitle";
    }


}
