<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method UnpinAllGeneralForumTopicMessages
 *
 * Use this method to clear the list of pinned messages in a General forum topic. The bot must be an administrator in the chat for this to work and must have the can_pin_messages administrator right in the supergroup. Returns True on success.
 */
class UnpinAllGeneralForumTopicMessages extends Method implements MethodInterface {

    /**
     * @param int | string $chatId Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     */
    public function __construct(int|string $chatId) {
        parent::__construct();

        $this->addAttribute('chat_id', $chatId);
    }

    public function methodName(): string {
        return "unpinAllGeneralForumTopicMessages";
    }


}
