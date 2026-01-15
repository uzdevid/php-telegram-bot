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

    /**
     * @param int | string $chatId Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param string $title New chat title, 1-128 characters
     */
    public function __construct(int|string $chatId, string $title) {
        parent::__construct();

        $this->addAttribute('chat_id', $chatId);
        $this->addAttribute('title', $title);
    }

    public function methodName(): string {
        return "setChatTitle";
    }


}
