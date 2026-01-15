<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method ReopenGeneralForumTopic
 *
 * Use this method to reopen a closed 'General' topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the can_manage_topics administrator rights. The topic will be automatically unhidden if it was hidden. Returns True on success.
 */
class ReopenGeneralForumTopic extends Method implements MethodInterface {

    /**
     * @param int | string $chatId Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     */
    public function __construct(int|string $chatId) {
        parent::__construct();

        $this->addAttribute('chat_id', $chatId);
    }

    public function methodName(): string {
        return "reopenGeneralForumTopic";
    }


}
