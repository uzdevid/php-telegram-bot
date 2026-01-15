<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method LeaveChat
 *
 * Use this method for your bot to leave a group, supergroup or channel. Returns True on success.
 */
class LeaveChat extends Method implements MethodInterface {
    public function __construct(int|string $chatId) {
        parent::__construct();
        $this->addAttribute('chat_id', $chatId);
    }

    public function methodName(): string {
        return "leaveChat";
    }


}
