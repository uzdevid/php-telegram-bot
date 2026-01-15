<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method SetBusinessAccountName
 *
 * Changes the first and last name of a managed business account. Requires the can_change_name business bot right. Returns True on success.
 */
class SetBusinessAccountName extends Method implements MethodInterface {

    /**
     * @param string $businessConnectionId Unique identifier of the business connection
     * @param string $firstName The new value of the first name for the business account; 1-64 characters
     */
    public function __construct(string $businessConnectionId, string $firstName) {
        parent::__construct();

        $this->addAttribute('business_connection_id', $businessConnectionId);
        $this->addAttribute('first_name', $firstName);
    }

    public function methodName(): string {
        return "setBusinessAccountName";
    }

    /**
     * @param string $lastName The new value of the last name for the business account; 0-64 characters
     *
     * @return $this
     */
    public function lastName(string $lastName): static {
        $this->addAttribute('last_name', $lastName);
        return $this;
    }
}
