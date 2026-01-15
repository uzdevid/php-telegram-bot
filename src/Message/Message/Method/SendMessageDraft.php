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

    /**
     * @param int $chatId Unique identifier for the target private chat
     * @param int $draftId Unique identifier of the message draft; must be non-zero. Changes of drafts with the same identifier are animated
     * @param string $text Text of the message to be sent, 1-4096 characters after entities parsing
     */
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
     * @param int $messageThreadId Unique identifier for the target message thread
     *
     * @return $this
     */
    public function messageThreadId(int $messageThreadId): static {
        $this->addAttribute('message_thread_id', $messageThreadId);
        return $this;
    }

    /**
     * @param string $parseMode Mode for parsing entities in the message text. See formatting options for more details.
     *
     * @return $this
     */
    public function parseMode(string $parseMode): static {
        $this->addAttribute('parse_mode', $parseMode);
        return $this;
    }

    /**
     * @param array $entities A JSON-serialized list of special entities that appear in message text, which can be specified instead of parse_mode
     *
     * @return $this
     */
    public function entities(array $entities): static {
        $this->addAttribute('entities', $entities);
        return $this;
    }
}
