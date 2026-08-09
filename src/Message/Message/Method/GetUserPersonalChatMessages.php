<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to get the last messages from the personal chat (i.e., the chat currently added
 * to their profile) of a given user. On success, an Array of Message objects is returned.
 *
 * Typical usage: instantiate the method with the required 'user_id' and 'limit' fields and dispatch
 * the request directly.
 *
 * @link https://core.telegram.org/bots/api#getuserpersonalchatmessages
 */
class GetUserPersonalChatMessages extends Method implements MethodInterface {
    /**
     * Creates a new GetUserPersonalChatMessages method and sets the required 'user_id' and 'limit'
     * fields.
     *
     * @param int $userId Unique identifier for the target user
     * @param int $limit The maximum number of messages to return; 1-20
     */
    public function __construct(int $userId, int $limit) {
        parent::__construct();
        $this->addAttribute('user_id', $userId);
        $this->addAttribute('limit', $limit);
    }

    public function methodName(): string {
        return 'getUserPersonalChatMessages';
    }
}
