<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Changes the first and last name of a managed business account. Requires the can_change_name
 * business bot right. Returns True on success.
 *
 * Typical usage: instantiate the method with the required 'business_connection_id' and 'first_name'
 * fields, then chain optional builder methods before dispatching the request.
 *
 * @see https://core.telegram.org/bots/api#setbusinessaccountname
 */
class SetBusinessAccountName extends Method implements MethodInterface {
    /**
     * Creates a new SetBusinessAccountName method and sets the required 'business_connection_id'
     * and 'first_name' fields.
     *
     * @param string $businessConnectionId Unique identifier of the business connection
     * @param string $firstName The new value of the first name for the business account; 1-64
     *   characters
     */
    public function __construct(string $businessConnectionId, string $firstName) {
        parent::__construct();
        $this->addAttribute('business_connection_id', $businessConnectionId);
        $this->addAttribute('first_name', $firstName);
    }

    public function methodName(): string {
        return 'setBusinessAccountName';
    }

    /**
     * The new value of the last name for the business account; 0-64 characters
     *
     * @param string $lastName The new value of the last name for the business account; 0-64
     *   characters
     *
     * @return $this
     */
    public function lastName(string $lastName): static {
        $this->addAttribute('last_name', $lastName);
        return $this;
    }
}
