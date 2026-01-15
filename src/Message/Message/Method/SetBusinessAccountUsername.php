<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method SetBusinessAccountUsername
 *
 * Changes the username of a managed business account. Requires the can_change_username business bot right. Returns True on success.
 */
class SetBusinessAccountUsername extends Method implements MethodInterface {

    /**
     * @param string $businessConnectionId Unique identifier of the business connection
     */
    public function __construct(string $businessConnectionId) {
        parent::__construct();

        $this->addAttribute('business_connection_id', $businessConnectionId);
    }

    public function methodName(): string {
        return "setBusinessAccountUsername";
    }

    /**
     * @param string $username The new value of the username for the business account; 0-32 characters
     *
     * @return $this
     */
    public function username(string $username): static {
        $this->addAttribute('username', $username);
        return $this;
    }
}
