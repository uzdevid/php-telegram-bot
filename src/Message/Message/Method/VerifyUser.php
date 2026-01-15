<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method VerifyUser
 *
 * Verifies a user on behalf of the organization which is represented by the bot. Returns True on success.
 */
class VerifyUser extends Method implements MethodInterface {
    public function __construct(int $userId) {
        parent::__construct();
        $this->addAttribute('user_id', $userId);
    }

    public function methodName(): string {
        return "verifyUser";
    }

    /**
     * @param string $customDescription
     *
     * @return $this
     */
    public function customDescription(string $customDescription): static {
        $this->addAttribute('custom_description', $customDescription);
        return $this;
    }
}
