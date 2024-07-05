<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

class GetChatMember extends Method implements MethodInterface {
    protected static string $__user_id = 'user_id';

    /**
     * @param int $userId
     * @param array $attributes
     */
    public function __construct(int $userId, array $attributes = []) {
        parent::__construct($attributes);
        $this->addAttribute(self::$__user_id, $userId);
    }

    /**
     * @return string
     */
    public function methodName(): string {
        return "getChatMember";
    }
}