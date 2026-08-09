<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to edit the name of the 'General' topic in a forum supergroup chat. The bot must
 * be an administrator in the chat for this to work and must have the can_manage_topics
 * administrator rights. Returns True on success.
 *
 * Typical usage: instantiate the method with the required 'name' field, then chain optional builder
 * methods before dispatching the request.
 *
 * @see https://core.telegram.org/bots/api#editgeneralforumtopic
 */
class EditGeneralForumTopic extends Method implements MethodInterface {
    /**
     * Creates a new EditGeneralForumTopic method and sets the required 'name' field.
     *
     * @param string $name New topic name, 1-128 characters
     */
    public function __construct(string $name) {
        parent::__construct();
        $this->addAttribute('name', $name);
    }

    public function methodName(): string {
        return 'editGeneralForumTopic';
    }

    /**
     * Unique identifier for the target chat or username of the target supergroup in the format
     *
     * @username
     *
     * @param int|string $chatId Unique identifier for the target chat or username of the target
     *   supergroup in the format @username
     *
     * @return $this
     */
    public function chatId(int|string $chatId): static {
        $this->addAttribute('chat_id', $chatId);
        return $this;
    }
}
