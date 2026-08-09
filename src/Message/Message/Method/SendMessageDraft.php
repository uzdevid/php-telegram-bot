<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Entity\MessageEntityInterface;
use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to stream a partial message to a user while the message is being generated. Note
 * that the streamed draft is ephemeral and acts as a temporary 30-second preview - once the output
 * is finalized, you must call sendMessage with the complete message to persist it in the user's
 * chat. Returns True on success.
 *
 * Typical usage: instantiate the method with the required 'draft_id' field, then chain optional
 * builder methods before dispatching the request.
 *
 * @link https://core.telegram.org/bots/api#sendmessagedraft
 */
class SendMessageDraft extends Method implements MethodInterface {
    /**
     * Creates a new SendMessageDraft method and sets the required 'draft_id' field.
     *
     * @param int $draftId Unique identifier of the message draft; must be non-zero. Changes to
     *   drafts with the same identifier are animated.
     */
    public function __construct(int $draftId) {
        parent::__construct();
        $this->addAttribute('draft_id', $draftId);
    }

    public function methodName(): string {
        return 'sendMessageDraft';
    }

    /**
     * Unique identifier for the target private chat
     *
     * @param int $chatId Unique identifier for the target private chat
     * @return $this
     */
    public function chatId(int $chatId): static {
        $this->addAttribute('chat_id', $chatId);
        return $this;
    }

    /**
     * Unique identifier for the target message thread
     *
     * @param int $messageThreadId Unique identifier for the target message thread
     * @return $this
     */
    public function messageThreadId(int $messageThreadId): static {
        $this->addAttribute('message_thread_id', $messageThreadId);
        return $this;
    }

    /**
     * Text of the message to be sent, 0-4096 characters after entities parsing. Pass an empty text
     * to show a “Thinking…” placeholder.
     *
     * @param string $text Text of the message to be sent, 0-4096 characters after entities parsing.
     *   Pass an empty text to show a “Thinking…” placeholder.
     * @return $this
     */
    public function text(string $text): static {
        $this->addAttribute('text', $text);
        return $this;
    }

    /**
     * Mode for parsing entities in the message text. See formatting options for more details.
     *
     * @param string $parseMode Mode for parsing entities in the message text. See formatting
     *   options for more details.
     * @return $this
     */
    public function parseMode(string $parseMode): static {
        $this->addAttribute('parse_mode', $parseMode);
        return $this;
    }

    /**
     * A JSON-serialized list of special entities that appear in message text, which can be
     * specified instead of parse_mode
     *
     * @param array $entities A JSON-serialized list of special entities that appear in message
     *   text, which can be specified instead of parse_mode
     * @return $this
     */
    public function entities(array $entities): static {
        $this->addAttribute('entities', $entities);
        return $this;
    }

    /**
     * Adds one item to the entities list. A JSON-serialized list of special entities that appear in
     * message text, which can be specified instead of parse_mode
     *
     * @param MessageEntityInterface $entity Adds one item to the entities list. A JSON-serialized
     *   list of special entities that appear in message text, which can be specified instead of
     *   parse_mode
     * @return $this
     */
    public function addEntity(MessageEntityInterface $entity): static {
        $this->addMessageEntity('entities', $entity);
        return $this;
    }
}
