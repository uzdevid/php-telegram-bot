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

    /**
     * @param int $chatId Unique identifier for the target direct messages chat
     * @param int $messageId Identifier of a suggested post message to approve
     */
    public function __construct(int $chatId, int $messageId) {
        parent::__construct();

        $this->addAttribute('chat_id', $chatId);
        $this->addAttribute('message_id', $messageId);
    }

    public function methodName(): string {
        return "approveSuggestedPost";
    }

    /**
     * @param int $sendDate Point in time (Unix timestamp) when the post is expected to be published; omit if the date has already been specified when the suggested post was created. If specified, then the date must be not more than 2678400 seconds (30 days) in the future
     *
     * @return $this
     */
    public function sendDate(int $sendDate): static {
        $this->addAttribute('send_date', $sendDate);
        return $this;
    }
}
