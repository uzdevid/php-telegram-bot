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

    /**
     * @param int $userId Unique identifier of the target user
     */
    public function __construct(int $userId) {
        parent::__construct();

        $this->addAttribute('user_id', $userId);
    }

    public function methodName(): string {
        return "verifyUser";
    }

    /**
     * @param string $customDescription Custom description for the verification; 0-70 characters. Must be empty if the organization isn't allowed to provide a custom verification description.
     *
     * @return $this
     */
    public function customDescription(string $customDescription): static {
        $this->addAttribute('custom_description', $customDescription);
        return $this;
    }
}
