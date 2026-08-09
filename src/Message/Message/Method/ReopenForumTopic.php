<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to reopen a closed topic in a forum supergroup chat. The bot must be an
 * administrator in the chat for this to work and must have the can_manage_topics administrator
 * rights, unless it is the creator of the topic. Returns True on success.
 *
 * Typical usage: instantiate the method with the required 'message_thread_id' field, then chain
 * optional builder methods before dispatching the request.
 *
 * @see https://core.telegram.org/bots/api#reopenforumtopic
 */
class ReopenForumTopic extends Method implements MethodInterface {
    /**
     * Creates a new ReopenForumTopic method and sets the required 'message_thread_id' field.
     *
     * @param int $messageThreadId Unique identifier for the target message thread of the forum
     *   topic
     */
    public function __construct(int $messageThreadId) {
        parent::__construct();
        $this->addAttribute('message_thread_id', $messageThreadId);
    }

    public function methodName(): string {
        return 'reopenForumTopic';
    }

    /**
     * Unique identifier for the target chat or username of the target supergroup in the format
     *
     * @username
     *
     * @param int|string $chatId Unique identifier for the target chat or username of the target
     *   supergroup in the format @username
     *
     * @return $this
     */
    public function chatId(int|string $chatId): static {
        $this->addAttribute('chat_id', $chatId);
        return $this;
    }
}
