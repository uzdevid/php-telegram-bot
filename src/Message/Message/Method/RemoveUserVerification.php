<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method RemoveUserVerification
 *
 * Removes verification from a user who is currently verified on behalf of the organization represented by the bot. Returns True on success.
 */
class RemoveUserVerification extends Method implements MethodInterface {
    public function __construct(int $userId) {
        parent::__construct();
        $this->addAttribute('user_id', $userId);
    }

    public function methodName(): string {
        return "removeUserVerification";
    }


}
