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
    public function __construct(int $chatId, int $messageId) {
        parent::__construct();
        $this->addAttribute('chat_id', $chatId);
        $this->addAttribute('message_id', $messageId);
    }

    public function methodName(): string {
        return "declineSuggestedPost";
    }

    /**
     * @param string $comment
     *
     * @return $this
     */
    public function comment(string $comment): static {
        $this->addAttribute('comment', $comment);
        return $this;
    }
}
