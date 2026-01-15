<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method DeleteChatPhoto
 *
 * Use this method to delete a chat photo. Photos can't be changed for private chats. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns True on success.
 */
class DeleteChatPhoto extends Method implements MethodInterface {
    public function __construct(int|string $chatId) {
        parent::__construct();
        $this->addAttribute('chat_id', $chatId);
    }

    public function methodName(): string {
        return "deleteChatPhoto";
    }


}
