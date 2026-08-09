<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to decline a suggested post in a direct messages chat. The bot must have the
 * 'can_manage_direct_messages' administrator right in the corresponding channel chat. Returns True
 * on success.
 *
 * Typical usage: instantiate the method with the required 'message_id' field, then chain optional
 * builder methods before dispatching the request.
 *
 * @see https://core.telegram.org/bots/api#declinesuggestedpost
 */
class DeclineSuggestedPost extends Method implements MethodInterface {
    /**
     * Creates a new DeclineSuggestedPost method and sets the required 'message_id' field.
     *
     * @param int $messageId Identifier of a suggested post message to decline
     */
    public function __construct(int $messageId) {
        parent::__construct();
        $this->addAttribute('message_id', $messageId);
    }

    public function methodName(): string {
        return 'declineSuggestedPost';
    }

    /**
     * Unique identifier for the target direct messages chat
     *
     * @param int $chatId Unique identifier for the target direct messages chat
     *
     * @return $this
     */
    public function chatId(int $chatId): static {
        $this->addAttribute('chat_id', $chatId);
        return $this;
    }

    /**
     * Comment for the creator of the suggested post; 0-128 characters
     *
     * @param string $comment Comment for the creator of the suggested post; 0-128 characters
     *
     * @return $this
     */
    public function comment(string $comment): static {
        $this->addAttribute('comment', $comment);
        return $this;
    }
}
