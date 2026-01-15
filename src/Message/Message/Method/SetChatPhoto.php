<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;
use UzDevid\Telegram\Bot\Type\InputFile;

/**
 * Method SetChatPhoto
 *
 * Use this method to set a new profile photo for the chat. Photos can't be changed for private chats. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns True on success.
 */
class SetChatPhoto extends Method implements MethodInterface {
    public function __construct(int|string $chatId, InputFile $photo) {
        parent::__construct();
        $this->addAttribute('chat_id', $chatId);
        $this->addAttribute('photo', $photo);
    }

    public function methodName(): string {
        return "setChatPhoto";
    }


}
