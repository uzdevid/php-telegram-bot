<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

class GetChatMember extends Method implements MethodInterface {
    /**
     * @param int $userId
     */
    public function __construct(int $userId) {
        parent::__construct();

        $this->addAttribute('user_id', $userId);
    }

    /**
     * @return string
     */
    public function methodName(): string {
        return "getChatMember";
    }
}