<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

class ForwardMessage extends Method implements MethodInterface {
    /**
     * @param string $fromChatId
     * @param int $messageId
     */
    public function __construct(string $fromChatId, int $messageId) {
        parent::__construct();

        $this->addAttribute('from_chat_id', $fromChatId);
        $this->addAttribute('message_id', $messageId);
    }

    /**
     * @return string
     */
    public function methodName(): string {
        return "forwardMessage";
    }

    /**
     * @param bool $protectContent
     *
     * @return $this
     */
    public function protectContent(bool $protectContent): static {
        $this->addAttribute('protect_content', $protectContent);
        return $this;
    }
}