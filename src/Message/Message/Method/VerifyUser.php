<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Verifies a user on behalf of the organization which is represented by the bot. Returns True on
 * success.
 *
 * Typical usage: instantiate the method with the required 'user_id' field, then chain optional
 * builder methods before dispatching the request.
 *
 * @link https://core.telegram.org/bots/api#verifyuser
 */
class VerifyUser extends Method implements MethodInterface {
    /**
     * Creates a new VerifyUser method and sets the required 'user_id' field.
     *
     * @param int $userId Unique identifier of the target user
     */
    public function __construct(int $userId) {
        parent::__construct();
        $this->addAttribute('user_id', $userId);
    }

    public function methodName(): string {
        return 'verifyUser';
    }

    /**
     * Custom description for the verification; 0-70 characters. Must be empty if the organization
     * isn't allowed to provide a custom verification description.
     *
     * @param string $customDescription Custom description for the verification; 0-70 characters.
     *   Must be empty if the organization isn't allowed to provide a custom verification
     *   description.
     * @return $this
     */
    public function customDescription(string $customDescription): static {
        $this->addAttribute('custom_description', $customDescription);
        return $this;
    }
}
