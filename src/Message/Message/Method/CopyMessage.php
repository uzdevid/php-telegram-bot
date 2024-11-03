<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

class CopyMessage extends Method implements MethodInterface {
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
     * @param string $caption
     *
     * @return $this
     */
    public function caption(string $caption): static {
        $this->addAttribute('caption', $caption);
        return $this;
    }

    /**
     * @param string $mode
     *
     * @return $this
     */
    public function parseMode(string $mode): static {
        $this->addAttribute('parse_mode', $mode);
        return $this;
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