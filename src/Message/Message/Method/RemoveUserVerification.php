<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Removes verification from a user who is currently verified on behalf of the organization
 * represented by the bot. Returns True on success.
 *
 * Typical usage: instantiate the method with the required 'user_id' field and dispatch the request
 * directly.
 *
 * @link https://core.telegram.org/bots/api#removeuserverification
 */
class RemoveUserVerification extends Method implements MethodInterface {
    /**
     * Creates a new RemoveUserVerification method and sets the required 'user_id' field.
     *
     * @param int $userId Unique identifier of the target user
     */
    public function __construct(int $userId) {
        parent::__construct();
        $this->addAttribute('user_id', $userId);
    }

    public function methodName(): string {
        return 'removeUserVerification';
    }
}
