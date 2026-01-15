<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method DeleteForumTopic
 *
 * Use this method to delete a forum topic along with all its messages in a forum supergroup chat or a private chat with a user. In the case of a supergroup chat the bot must be an administrator in the chat for this to work and must have the can_delete_messages administrator rights. Returns True on success.
 */
class DeleteForumTopic extends Method implements MethodInterface {
    public function __construct(int|string $chatId, int $messageThreadId) {
        parent::__construct();
        $this->addAttribute('chat_id', $chatId);
        $this->addAttribute('message_thread_id', $messageThreadId);
    }

    public function methodName(): string {
        return "deleteForumTopic";
    }


}
