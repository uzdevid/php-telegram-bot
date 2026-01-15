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
    public function __construct(string $businessConnectionId) {
        parent::__construct();
        $this->addAttribute('business_connection_id', $businessConnectionId);
    }

    public function methodName(): string {
        return "setBusinessAccountUsername";
    }

    /**
     * @param string $username
     *
     * @return $this
     */
    public function username(string $username): static {
        $this->addAttribute('username', $username);
        return $this;
    }
}
