<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method ApproveSuggestedPost
 *
 * Use this method to approve a suggested post in a direct messages chat. The bot must have the 'can_post_messages' administrator right in the corresponding channel chat. Returns True on success.
 */
class ApproveSuggestedPost extends Method implements MethodInterface {
    public function __construct(int $chatId, int $messageId) {
        parent::__construct();
        $this->addAttribute('chat_id', $chatId);
        $this->addAttribute('message_id', $messageId);
    }

    public function methodName(): string {
        return "approveSuggestedPost";
    }

    /**
     * @param int $sendDate
     *
     * @return $this
     */
    public function sendDate(int $sendDate): static {
        $this->addAttribute('send_date', $sendDate);
        return $this;
    }
}
