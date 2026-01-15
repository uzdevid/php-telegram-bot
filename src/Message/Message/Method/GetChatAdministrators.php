<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method GetChatAdministrators
 *
 * Use this method to get a list of administrators in a chat, which aren't bots. Returns an Array of ChatMember objects.
 */
class GetChatAdministrators extends Method implements MethodInterface {
    public function __construct(int|string $chatId) {
        parent::__construct();
        $this->addAttribute('chat_id', $chatId);
    }

    public function methodName(): string {
        return "getChatAdministrators";
    }


}
