<?php

namespace uzdevid\telegram\bot\message\messages\methods;

use uzdevid\telegram\bot\message\messages\Method;
use uzdevid\telegram\bot\message\messages\MethodInterface;

/**
 * Use this method to edit text and game messages.
 * On success, if the edited message is not an inline message, the edited Message is returned, otherwise True is returned.
 * Note that business messages that were not sent by the bot and do not contain an inline keyboard can only be edited within 48 hours from the time they were sent.
 */
class EditMessageText extends Method implements MethodInterface {
    protected static string $__business_connection_id = 'business_connection_id';
    protected static string $__message_id = 'message_id';
    protected static string $__inline_message_id = 'inline_message_id';
    protected static string $__text = 'text';
    protected static string $__parse_mode = 'parse_mode';

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
        return 'editMessageText';
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
     * @param string $text
     * @return $this
     */
    public function text(string $text): static {
        $this->addAttribute(self::$__text, $text);
        return $this;
    }
}