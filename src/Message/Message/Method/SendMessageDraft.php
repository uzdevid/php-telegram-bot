<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Method SendMessageDraft
 *
 * Use this method to stream a partial message to a user while the message is being generated; supported only for bots with forum topic mode enabled. Returns True on success.
 */
class SendMessageDraft extends Method implements MethodInterface {
    public function __construct(int $chatId, int $draftId, string $text) {
        parent::__construct();
        $this->addAttribute('chat_id', $chatId);
        $this->addAttribute('draft_id', $draftId);
        $this->addAttribute('text', $text);
    }

    public function methodName(): string {
        return "sendMessageDraft";
    }

    /**
     * @param int $messageThreadId
     *
     * @return $this
     */
    public function messageThreadId(int $messageThreadId): static {
        $this->addAttribute('message_thread_id', $messageThreadId);
        return $this;
    }

    /**
     * @param string $parseMode
     *
     * @return $this
     */
    public function parseMode(string $parseMode): static {
        $this->addAttribute('parse_mode', $parseMode);
        return $this;
    }

    /**
     * @param array $entities
     *
     * @return $this
     */
    public function entities(array $entities): static {
        $this->addAttribute('entities', $entities);
        return $this;
    }
}
