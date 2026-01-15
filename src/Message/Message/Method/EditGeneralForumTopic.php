<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method EditGeneralForumTopic
 *
 * Use this method to edit the name of the 'General' topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the can_manage_topics administrator rights. Returns True on success.
 */
class EditGeneralForumTopic extends Method implements MethodInterface {
    public function __construct(int|string $chatId, string $name) {
        parent::__construct();
        $this->addAttribute('chat_id', $chatId);
        $this->addAttribute('name', $name);
    }

    public function methodName(): string {
        return "editGeneralForumTopic";
    }


}
