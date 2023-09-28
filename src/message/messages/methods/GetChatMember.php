<?php

namespace uzdevid\telegram\bot\message\messages\methods;

use uzdevid\telegram\bot\message\messages\Method;
use uzdevid\telegram\bot\message\messages\MethodInterface;

class GetChatMember extends Method implements MethodInterface {
    protected static string $__user_id = 'user_id';

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