<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

class ApproveChatJoinRequest extends Method implements MethodInterface {
    /**
     * @param string $userId
     */
    public function __construct(string $userId) {
        parent::__construct();

        $this->addAttribute('user_id', $userId);
    }

    /**
     * @return string
     */
    public function methodName(): string {
        return 'approveChatJoinRequest';
    }
}