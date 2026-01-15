<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method UnbanChatSenderChat
 *
 * Use this method to unban a previously banned channel chat in a supergroup or channel. The bot must be an administrator for this to work and must have the appropriate administrator rights. Returns True on success.
 */
class UnbanChatSenderChat extends Method implements MethodInterface {
    public function __construct(int|string $chatId, int $senderChatId) {
        parent::__construct();
        $this->addAttribute('chat_id', $chatId);
        $this->addAttribute('sender_chat_id', $senderChatId);
    }

    public function methodName(): string {
        return "unbanChatSenderChat";
    }


}
