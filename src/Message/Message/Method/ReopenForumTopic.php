<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method ReopenForumTopic
 *
 * Use this method to reopen a closed topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the can_manage_topics administrator rights, unless it is the creator of the topic. Returns True on success.
 */
class ReopenForumTopic extends Method implements MethodInterface {
    public function __construct(int|string $chatId, int $messageThreadId) {
        parent::__construct();
        $this->addAttribute('chat_id', $chatId);
        $this->addAttribute('message_thread_id', $messageThreadId);
    }

    public function methodName(): string {
        return "reopenForumTopic";
    }


}
