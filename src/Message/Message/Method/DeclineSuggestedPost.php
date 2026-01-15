<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method DeclineSuggestedPost
 *
 * Use this method to decline a suggested post in a direct messages chat. The bot must have the 'can_manage_direct_messages' administrator right in the corresponding channel chat. Returns True on success.
 */
class DeclineSuggestedPost extends Method implements MethodInterface {

    /**
     * @param int $chatId Unique identifier for the target direct messages chat
     * @param int $messageId Identifier of a suggested post message to decline
     */
    public function __construct(int $chatId, int $messageId) {
        parent::__construct();

        $this->addAttribute('chat_id', $chatId);
        $this->addAttribute('message_id', $messageId);
    }

    public function methodName(): string {
        return "declineSuggestedPost";
    }

    /**
     * @param string $comment Comment for the creator of the suggested post; 0-128 characters
     *
     * @return $this
     */
    public function comment(string $comment): static {
        $this->addAttribute('comment', $comment);
        return $this;
    }
}
