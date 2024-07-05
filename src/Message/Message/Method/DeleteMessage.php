<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

class DeleteMessage extends Method implements MethodInterface {
    protected static string $__message_id = 'message_id';

    /**
     * @param int $messageId
     * @param array $attributes
     */
    public function __construct(int $messageId, array $attributes = []) {
        parent::__construct($attributes);
        $this->addAttribute(self::$__message_id, $messageId);
    }

    /**
     * @return string
     */
    public function methodName(): string {
        return "deleteMessage";
    }
}