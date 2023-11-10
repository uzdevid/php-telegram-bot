<?php

namespace uzdevid\telegram\bot\message\messages\methods;

use uzdevid\telegram\bot\message\messages\Method;
use uzdevid\telegram\bot\message\messages\MethodInterface;

class DeleteMessage extends Method implements MethodInterface {
    protected static string $__message_id = 'message_id';

    public function __construct(int $messageId, array $attributes = []) {
        parent::__construct($attributes);
        $this->addAttribute(self::$__message_id, $messageId);
    }

    public function methodName(): string {
        return "deleteMessage";
    }
}