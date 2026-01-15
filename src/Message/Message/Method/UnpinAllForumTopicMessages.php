<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method UnpinAllForumTopicMessages
 *
 * Use this method to clear the list of pinned messages in a forum topic in a forum supergroup chat or a private chat with a user. In the case of a supergroup chat the bot must be an administrator in the chat for this to work and must have the can_pin_messages administrator right in the supergroup. Returns True on success.
 */
class UnpinAllForumTopicMessages extends Method implements MethodInterface {

    /**
     * @param int | string $chatId Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     * @param int $messageThreadId Unique identifier for the target message thread of the forum topic
     */
    public function __construct(int|string $chatId, int $messageThreadId) {
        parent::__construct();

        $this->addAttribute('chat_id', $chatId);
        $this->addAttribute('message_thread_id', $messageThreadId);
    }

    public function methodName(): string {
        return "unpinAllForumTopicMessages";
    }


}
