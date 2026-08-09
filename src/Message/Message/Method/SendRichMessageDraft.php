<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to stream a partial rich message to a user while the message is being generated.
 * Note that the streamed draft is ephemeral and acts as a temporary 30-second preview - once the
 * output is finalized, you must call sendRichMessage with the complete message to persist it in the
 * user's chat. Returns True on success.
 *
 * Typical usage: instantiate the method with the required 'draft_id' and 'rich_message' fields,
 * then chain optional builder methods before dispatching the request.
 *
 * @link https://core.telegram.org/bots/api#sendrichmessagedraft
 */
class SendRichMessageDraft extends Method implements MethodInterface {
    /**
     * Creates a new SendRichMessageDraft method and sets the required 'draft_id' and 'rich_message'
     * fields.
     *
     * @param int $draftId Unique identifier of the message draft; must be non-zero. Changes to
     *   drafts with the same identifier are animated.
     * @param mixed $richMessage The partial message to be streamed. Direct upload of new files
     *   isn't supported.
     */
    public function __construct(int $draftId, mixed $richMessage) {
        parent::__construct();
        $this->addAttribute('draft_id', $draftId);
        $this->addAttribute('rich_message', $richMessage);
    }

    public function methodName(): string {
        return 'sendRichMessageDraft';
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
}
