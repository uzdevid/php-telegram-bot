<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Changes the username of a managed business account. Requires the can_change_username business bot
 * right. Returns True on success.
 *
 * Typical usage: instantiate the method with the required 'business_connection_id' field, then
 * chain optional builder methods before dispatching the request.
 *
 * @link https://core.telegram.org/bots/api#setbusinessaccountusername
 */
class SetBusinessAccountUsername extends Method implements MethodInterface {
    /**
     * Creates a new SetBusinessAccountUsername method and sets the required
     * 'business_connection_id' field.
     *
     * @param string $businessConnectionId Unique identifier of the business connection
     */
    public function __construct(string $businessConnectionId) {
        parent::__construct();
        $this->addAttribute('business_connection_id', $businessConnectionId);
    }

    public function methodName(): string {
        return 'setBusinessAccountUsername';
    }

    /**
     * The new value of the username for the business account; 0-32 characters
     *
     * @param string $username The new value of the username for the business account; 0-32
     *   characters
     * @return $this
     */
    public function username(string $username): static {
        $this->addAttribute('username', $username);
        return $this;
    }
}
