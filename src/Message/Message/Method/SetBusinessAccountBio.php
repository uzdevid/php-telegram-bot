<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Changes the bio of a managed business account. Requires the can_change_bio business bot right.
 * Returns True on success.
 *
 * Typical usage: instantiate the method with the required 'business_connection_id' field, then
 * chain optional builder methods before dispatching the request.
 *
 * @link https://core.telegram.org/bots/api#setbusinessaccountbio
 */
class SetBusinessAccountBio extends Method implements MethodInterface {
    /**
     * Creates a new SetBusinessAccountBio method and sets the required 'business_connection_id'
     * field.
     *
     * @param string $businessConnectionId Unique identifier of the business connection
     */
    public function __construct(string $businessConnectionId) {
        parent::__construct();
        $this->addAttribute('business_connection_id', $businessConnectionId);
    }

    public function methodName(): string {
        return 'setBusinessAccountBio';
    }

    /**
     * The new value of the bio for the business account; 0-140 characters
     *
     * @param string $bio The new value of the bio for the business account; 0-140 characters
     * @return $this
     */
    public function bio(string $bio): static {
        $this->addAttribute('bio', $bio);
        return $this;
    }
}
