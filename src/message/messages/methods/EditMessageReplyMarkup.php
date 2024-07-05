<?php

namespace uzdevid\telegram\bot\message\messages\methods;

use uzdevid\telegram\bot\message\messages\Method;
use uzdevid\telegram\bot\message\messages\MethodInterface;

class EditMessageReplyMarkup extends Method implements MethodInterface {
    protected static string $__business_connection_id = 'business_connection_id';
    protected static string $__message_id = 'message_id';
    protected static string $__inline_message_id = 'inline_message_id';
    protected static string $__reply_markup = 'reply_markup';

    /**
     * @param int $messageId
     * @param array $attributes
     */
    public function __construct(int $messageId, array $attributes = []) {
        parent::__construct($attributes);
        $this->addAttribute(self::$__message_id, $messageId);
    }

    /**
     * @param string $businessConnectionId
     * @return $this
     */
    public function businessConnectionId(string $businessConnectionId): static {
        $this->addAttribute(self::$__business_connection_id, $businessConnectionId);
        return $this;
    }

    /**
     * @param string $inlineMessageId
     * @return $this
     */
    public function inlineMessageId(string $inlineMessageId): static {
        $this->addAttribute(self::$__inline_message_id, $inlineMessageId);
        return $this;
    }

    /**
     * @return string
     */
    public function methodName(): string {
        return 'editMessageReplyMarkup';
    }
}